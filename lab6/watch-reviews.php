<?php

session_start();

//if (!empty($_GET['author']) && !empty($_GET['gender'])) {
//
//    require_once 'assets/include/connection.php';
//    $dbLink = databaseConnect();
//
//    $author = mysqli_real_escape_string($dbLink, $_GET['author']);
//    $gender = mysqli_real_escape_string($dbLink, $_GET['gender']);
//
//    $sql = "SELECT users.username, reviews.gender, reviews.rate, reviews.description FROM users JOIN reviews ON users.user_id = reviews.user_id";
//
//    $query_result = mysqli_query($dbLink, $sql);
//    echo "<table>";
//    while ($row = mysqli_fetch_assoc($query_result)) {
//        echo "<tr>";
//        foreach ($row as $item) {
//            echo '<td>' . $item . '</td>';
//        }
//        echo "</tr>";
//    }
//    echo "</table>";
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Stas Krivosheya">
    <meta name="description" content="Всё о современной безопасности дома!">
    <meta name="keywords" content="main, security, home, house, flat, apartment, smart, modern">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <style>
        table td {
            padding: 5px;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Secure Home</title>
</head>
<body>
<div class="wrapper">
    <a name="top"></a>
    <?php include'assets/include/header.php' ?>
    <div id="main">
        <div id="content">
            <strong>Выберите фильр отзывов:</strong>
            <form action="watch-reviews.php" method="get">
                <u>Чьи:</u> -
                <select name="author">
                    <option value="me">Мои</option>
                    <option value="all">Все</option>
                </select>
                 |  <u>пол:</u> -
                <select name="gender">
                    <option value="all">Любой</option>
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                </select>
                <br>
                <input style="margin-top: 10px" type="submit" class="form-btn" value="Посмотреть">
            </form>
            <br>
            <?php
            if (!empty($_GET['author']) && !empty($_GET['gender'])) {

                require_once 'assets/include/connection.php';
                $dbLink = databaseConnect();

                $author = mysqli_real_escape_string($dbLink, $_GET['author']);
                $gender = mysqli_real_escape_string($dbLink, $_GET['gender']);

                $sql = "SELECT users.username, reviews.gender, reviews.rate, reviews.description FROM users JOIN reviews ON users.user_id = reviews.user_id";

                if ($_GET['author'] == 'me') {
                    if (!isset($_SESSION['username'])){
                        header('location: authorization.php');
                        exit();
                    }

                    $user_id = mysqli_real_escape_string($dbLink, $_SESSION['user_id']);
                    $sql .= " WHERE users.user_id = '$user_id'";
                }

                $gender = mysqli_real_escape_string($dbLink, $_GET['gender']);
                if ($_GET['gender'] != 'all') {
                    if ($_GET['gender'] != 'male' && $_GET['gender'] != 'female') {
                        die('Bad filter!');
                    }
                    $sql .= " && reviews.gender = '$gender'";
                }

                $sql .= " ORDER BY reviews.review_id";

                $query_result = mysqli_query($dbLink, $sql);
                echo "<table border='1px' rules='all' style='text-align: left;'; margin: 10px;'>";
                echo "<tr><td><b>Имя</b></td><td><b>Пол</b></td><td><b>Оценка</b></td><td><b>Комментарий</b></td></tr>";
                while ($row = mysqli_fetch_assoc($query_result)) {
                    echo "<tr>";
                    foreach ($row as $item) {
                        echo '<td style="white-space: pre-line">' . $item . '</td>';
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }

            ?>

        </div>
        <?php include'assets/include/sidebar.php' ?>
    </div>
    <?php include'assets/include/footer.php' ?>
</div>
</body>
<a href="#top" id="to-top-button"><img src="assets/images/up.png" alt="up"></a>
</html>