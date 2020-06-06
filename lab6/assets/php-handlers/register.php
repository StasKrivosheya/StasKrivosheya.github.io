<?php
session_start();
// connecting to the database
require_once '../include/connection.php';
$dbLink = databaseConnect();

// data validation
$_SESSION['errorMessage'] = "";

if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    if (!preg_match("/^(?=.*\d)(?=.*[a-zа-яё])(?=.*[A-ZА-ЯЁ]).{6,}$/", $_POST['password'])) {
        $_SESSION['errorMessage'] = "Ваш пароль не прошел валидацию: пароль должен иметь хотя-бы одну букву латинницей и хотя-бы одну цифру, иметь длину 6+ символов!";

    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errorMessage'] = 'Неверная эл. почта!';

    } else {
        // if everything is alright, ensure that we have empty errorMessage
        $_SESSION['errorMessage'] = "";
    }
} else {
    $_SESSION['errorMessage'] = "Все поля должны быть заполнены!";
}

// if there weren't any errors, go ahead
if (empty($_SESSION['errorMessage'])) {
    $username = mysqli_real_escape_string($dbLink, $_POST['username']);
    $email = mysqli_real_escape_string($dbLink, $_POST['email']);
    $password = mysqli_real_escape_string($dbLink, $_POST['password']);

    $username = trim($username);
    $email = trim($email);
    $password = password_hash($password, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $query = mysqli_query($dbLink, $sql);

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['errorMessage'] = "Пользователь с таким именем уже есть!";
        header('location: /lab6/authorization.php');
    }
    else {
        $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";

        mysqli_query($dbLink, $sql);

        $_SESSION['username'] = $username;

        // getting user id from db and setting it to super global variable
        $sql = "SELECT user_id FROM users WHERE username='$username' LIMIT 1;";
        $queryResult = mysqli_query($dbLink, $sql);
        $queryResult = mysqli_fetch_assoc($queryResult);

        $_SESSION['user_id'] = $queryResult['user_id'];
        //

        header("location: /lab6/");
    }
} else {
    header('location: /lab6/authorization.php');
}