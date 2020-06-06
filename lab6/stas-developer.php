<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Stas Krivosheya">
    <meta name="description" content="Всё о современной безопасности дома!">
    <meta name="keywords" content="main, security, home, house, flat, apartment, smart, modern">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Secure Home</title>
    <style>
        #header h1{
            color: cornsilk;
            text-shadow: 3px 3px 5px black;
        }

        #header img{
            box-shadow: 0 0 100px white;
            filter: invert(100%);
        }

        #header {
            background-image: url('/lab6/assets/images/stas-wide.jpg');
            background-size: cover;
            background-position: right;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <a name="top"></a>
    <?php include'assets/include/header.php' ?>
    <div id="main">
        <div id="content" style="background: ">
            <p style="text-align: center">Всем привет это я всем пока это я)</p>
            <img src="assets/images/stas.jpg" alt="stas" style="width: 75%">

            <?php
            if (isset($_SESSION['username'])) {
                echo "<p style='text-align: center'>Вот еще парочка фоток :]</p>";
                echo "<div style='display: flex'>";
                echo "<img src=\"assets/images/stas-unique1.jpg\" alt=\"stas\" style='width: 40%;'>";
                echo "<img src=\"assets/images/stas-unique2.jpg\" alt=\"stas\" style='max-width: 40%;'>";
                echo "</div>";
            }
            else {
                echo "<p style='text-align: center; margin-top: 10px;'><i>Есть еще две фотки. Чтобы увидеть их, неободимо зарегистрироваться или войти!</i></p>";
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