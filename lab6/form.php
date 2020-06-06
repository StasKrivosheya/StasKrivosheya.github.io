<?php
session_start();

if (isset($_SESSION['reviewMessage'])) {
    $_SESSION['reviewMessage'] = null;
}

if (isset($_POST['submit-btn'])) {

    require_once 'assets/include/connection.php';
    $dbLink = databaseConnect();

    $was_all_data_set = isset($_POST['gender']) && isset($_POST['rate']) && !empty($_POST['comment']);
    if ($was_all_data_set) {

        $gender = $_POST['gender'];
        $rate = $_POST['rate'];
        $comment = $_POST['comment'];

        $suggestions = "";
        if (isset($_POST['option1'])) {
            $suggestions .= $_POST['option1'] . "\n";
        }
        if (isset($_POST['option2'])) {
            $suggestions .= $_POST['option2'] . "\n";
        }
        if (isset($_POST['option3'])) {
            $suggestions .= $_POST['option3'] . "\n";
        }
        if (isset($_POST['option4'])) {
            $suggestions .= $_POST['option4'] . "\n";
        }

        $gender = trim($gender);
        $rate = trim($rate);
        $comment = trim($comment);
        $suggestions = trim($suggestions);

        $gender = mysqli_real_escape_string($dbLink, $gender);
        $rate = mysqli_real_escape_string($dbLink, $rate);
        $comment = mysqli_real_escape_string($dbLink, $comment);
        $suggestions = mysqli_real_escape_string($dbLink, $suggestions);

        $id = $_SESSION['user_id'];
        $sql = "INSERT INTO reviews(user_id, gender, rate, suggestions, description) VALUES ('$id', '$gender', '$rate', '$suggestions', '$comment')";

        mysqli_query($dbLink, $sql);

        $_SESSION['reviewMessage'] = "Спасибо! Ваш отзыв успешно был отправлен и сохранен в базу данных!";

    } else {
        $_SESSION['reviewMessage'] = "Вам следует выбрать ПОЛ!<br>
            Также, нужно написать хоть что-то в комментарии (если всё ок - то так и напишите)";
    }

}
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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <title>Secure Home</title>
</head>
<body>
<div class="wrapper">
    <a name="top"></a>
    <?php include'assets/include/header.php' ?>
    <div id="main">
        <div id="content">
            <h2><strong>Форма</strong></h2>
            <?php if (isset($_SESSION['username'])) { ?>
            <p>
                Дорогой <b><?php if (isset($_SESSION['username'])) echo $_SESSION['username']?></b>, добро пожаловать на страницу обратной связи!<br>
                Нам очень важно Ваше мнение, поэтому просим Вас выразить свои мысли по поводу данного ресурса.
            </p>
                <p style="border-left: solid 3px #ff5c10; background-color: #FFE8D46C; padding: 15px 10px">Ознакомится со всеми отзывами можно <a href="watch-reviews.php" style="color: #ff5c10">ЗДЕСЬ</a>.</p>
            <form method="post" name="review" action="form.php#reviewMessage">
                <p>
                    Ваш пол*:<br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Мужской</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Женский</label><br>
                </p>
                <p>
                    <strong>Оцените наш сайт по шкале от 1 до 5</strong><br>
                    <select name="rate">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5" selected>5</option>
                    </select>
                </p>
                <p>
                    Вы бы хотели видеть :<br>
                    <input type="checkbox" name="option1" value="Больше о проверенных технологиях">Больше о проверенных технологиях<Br>
                    <input type="checkbox" name="option2" value="Больше о новых технологиях">Больше о новых технологиях<Br>
                    <input type="checkbox" name="option3" value="Концепцию умного дома">Концепцию умного дома<Br>
                    <input type="checkbox" name="option4" value="Пути развития беззопасности дома с нуля">Пути развития беззопасности дома с нуля<Br>
                </p>
                <p>
                    Любые замечание и/или можелания Вы можете оставить здесь:<br>
                    <textarea style="margin-top: 10px; resize: vertical" name="comment" placeholder="Я считаю... Мне бы хотелось... Я бы изменил..."></textarea>
                </p>
                <input type="submit" name="submit-btn" class="form-btn" value="Отправить">
<!--                <input type="reset" class="form-btn" value="Сброс">-->
            </form>
            <a name="reviewMessage"></a>
                <?php
                    if (isset($_SESSION['reviewMessage'])) {
                        echo "<p style='margin-top: 5px'><b>";
                        echo $_SESSION['reviewMessage'];
                        echo "</b></p>";
                    }
                ?>
            <?php }
            else {
                echo "<p>";
                echo "Уважаемый пользователь! Для того, чтобы оставить отзыв, Вам необходимо зарегистрироваться или войти. ";
                echo "Нажмите на кпопку \"Войти\"! <br><br>";
                echo "<img src='https://hdwallsource.com/img/2017/12/dream-house-wallpaper-photos-62358-64300-hd-wallpapers.jpg'>";
                echo "</p>";
            }
            ?>
        </div>
        <?php include'assets/include/sidebar.php' ?>
    </div>
    <?php include'assets/include/footer.php' ?>
</div>
</body>
<?php
if (isset($_SESSION['reviewMessage'])) {
?>
<script>
    window.scrollTo(0, document.body.scrollHeight);
</script>
<?php
}
?>
<a href="#top" id="to-top-button"><img src="assets/images/up.png" alt="up"></a>
</html>