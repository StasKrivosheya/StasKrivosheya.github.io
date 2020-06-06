<?php
session_start();

// connecting to the database
require_once '../include/connection.php';
$dbLink = databaseConnect();

if (! $dbLink) {
    die("Could not connect: " . mysqli_connect_error());
}

// data validation
$_SESSION['errorMessage'] = "";

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = mysqli_real_escape_string($dbLink, $_POST['username']);
    $password = mysqli_real_escape_string($dbLink, $_POST['password']);

    $username = trim($username);

    if(preg_match("/^.{2,}$/", $username)) {

        $sql = "SELECT user_id, username, password FROM users WHERE username='$username' LIMIT 1;";
        $queryResult = mysqli_query($dbLink, $sql);

        $queryResult = mysqli_fetch_assoc($queryResult);

        if (isset($queryResult)) {
            if (password_verify($password, $queryResult['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $queryResult['user_id'];
                header("location: /lab6/");
            } else {
                $_SESSION['errorMessage'] = $username . ", неверный пароль!";
                header("location: /lab6/authorization.php");
            }
        } else {
            $_SESSION['errorMessage'] = "Пользователь '" . $username . "' не зарегистрирован!";
            header("location: /lab6/authorization.php");
        }
    } else {
        $_SESSION['errorMessage'] = "Имя не может быть однобуквенным!";
        header("location: /lab6/authorization.php");
    }
} else {
    $_SESSION['errorMessage'] = "Все поля должны быть заполнены!";
    header("location: /lab6/authorization.php");
}