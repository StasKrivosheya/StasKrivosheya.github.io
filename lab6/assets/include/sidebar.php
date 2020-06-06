<div id="sidebar">
    <?php
    if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
        echo "<p>Hello, " . $_SESSION['username'] . "</p>";
        echo "<a href=\"authorization.php\" class=\"menu-button\">Выйти</a>";
    }
    else {
        echo "<p>Регистрация/Вход</p>";
        echo "<a href=\"authorization.php\" class=\"menu-button\" onclick=''>Войти</a>";
    }
    ?>
    <p>Меню сайта</p>
    <a href="index.php" class="menu-button">На главную</a>
    <a href="gallery.php" class="menu-button">Галерея</a>
    <a href="form.php" class="menu-button">Отзыв</a>
    <a href="e-book.php#top-content" class="menu-button">Электронная книга</a>
    <a href="stas-developer.php" class="menu-button">Посмотреть автора 👀 </a>
    <a href="other-queries.php" class="menu-button">Существующие системы безопасноси</a>
</div>