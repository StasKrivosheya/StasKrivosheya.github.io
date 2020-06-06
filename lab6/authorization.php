<?php
session_start();

// if user was logged in, log out || delete errors
if(isset($_SESSION['username']) || isset($_SESSION['errorMessage'])) {
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
}
$needRegister = false;
if (isset($_SESSION['errorMessage'])) {
    $needRegister = $_SESSION['errorMessage'] == "Пользователь с таким именем уже есть!";
}
//else {
//    // temp test, should be commented or deleted
//    $_SESSION['username'] = "Любящая одуванчики абрикоска";
//}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/logging.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>SecureHome</title>
</head>
    <body>
        <div class="wrapper">
            <div id="link">
                <a href="\lab6\"><img src="assets/images/logo.ico" alt="logo"></a>
            </div>
            <div class="form-box">
                <div class="switcher-box">
                    <div id="switcher"></div>
                    <button type="button" class="toggle-button" onclick="switchLogin()">Вход</button>
                    <button type="button" class="toggle-button" onclick="switchRegister()">Регистрация</button>
                </div>
                <form action="assets/php-handlers/login.php" method="POST" id="login" class="input-group">
                    <input type="text" name="username" id="log-name" class="input-field" placeholder="имя" maxlength="45" required>
                    <input type="password" name="password" class="input-field" placeholder="пароль" required>
                    <button type="submit" class="form-btn">Войти</button>
<!--                    <button type="reset" class="form-btn">Сброс</button>-->
                </form>
                <form action="assets/php-handlers/register.php" method="POST" id="register" class="input-group">
                    <input type="text" name="username" id="reg-name" class="input-field" placeholder="имя" minlength="2" maxlength="45" required>
                    <input type="email" name="email" id="reg-mail" class="input-field" placeholder="эл. почта" maxlength="45" required>
                    <input type="password" name="password" id="reg-psw" class="input-field" placeholder="пароль (буквы и цифры, 6+ символов)"
                           pattern="^(?=.*\d)(?=.*[a-zа-яё])(?=.*[A-ZА-ЯЁ]).{6,}$" required>
                    <button type="submit" id="reg-submit" class="form-btn">Зарегистрироваться</button>
<!--                    <button type="reset" id="reg-reset" class="form-btn">Сброс</button>-->
                </form>
                <p style="position: absolute; bottom: 80px; left: 35px">
                    <?php
                    if (!empty($_SESSION['errorMessage'])) {
                        echo $_SESSION['errorMessage'];
                    }
                    ?>
                </p>
                <?php include'assets/include/footer.php' ?>
            </div>
        </div>
        <script src="assets/js/authorization.js"></script>
    </body>
<?php
if ($needRegister) {
    echo "<script>switchRegister()</script>";
} ?>
</html>