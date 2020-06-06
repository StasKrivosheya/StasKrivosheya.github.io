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
    <title>Secure Home</title>
</head>
<body>
<div class="wrapper">
    <a name="top"></a>
    <?php include'assets/include/header.php' ?>
    <div id="main">
        <div id="content">
            <a name="top-content"></a>
            <div id="intro">
                <div id="title"><h1>Электронная книга</h1></div>
                <img class="ebook-img" src="http://75shg-bilim.kz/images/news/2019/09/05/internet.jpg" alt="Child's security">
                <div class="ebook-text">
                    <p>
                        Человек, знающий где его может подстерегать опасность и как избежать её или как вести себя в непредвиденной ситуации, защищённый человек.
                        «Мой дом – моя крепость», - гласит народная мудрость. И многие из нас думают так же. Верно! Дом считается одним из надёжных мест для человека.
                        Однако иногда, при определённых условиях, и он может оказаться небезопасным. Но, чтобы этого не произошло,
                        нужно не только владеть определёнными общедоступными знаниями, но и выполнять эти несложные правила, которые запомнит любой ребенок.
                        <br>Нажмите на кнопку "Читать!" справа чтобы ознакамиться с главными правилами безопасности.
                    </p>
                </div>
            </div>
            <div id="page1" style="display: none;">
                <div class="ebook-text">
                    <img class="ebook-img" src="https://pngimg.com/uploads/thief/thief_PNG60.png" alt="thief">
                    <ol>
                        <li>Прежде чем открыть дверь, посмотрите в глазок.</li>
                        <li>Не забывайте спрашивать: «Кто пришёл».</li>
                        <li>Не открывайте дверь, если вы дома один. Попросите зайти позже, даже если это представители полиции, ЖКХ или почты.</li>
                        <li>Просят вынести попить или разрешить позвонить – не открывайте. Сообщите взрослым, которые находятся дома. Если нет взрослых, не открывая дверь, отойдите от неё.</li>
                        <li>Не отвечайте на вопросы о местонахождении ваших близких: «Куда ушли?», «Когда придут?» и т.д.</li>
                        <li>Прежде чем выйти из квартиры, не забудьте посмотреть в глазок – нет ли за дверью посторонних, а затем уж открывайте дверь и выходите.</li>
                    </ol>
                </div>
            </div>
            <div id="page2" style="display: none;">
                <div class="ebook-text">
                    <ol start="7">
                        <li>Незамедлительно вернитесь домой, если при выходе из квартиры вы столкнулись с незнакомым человеком. Подождите пока он уйдёт, или попросите членов вашей семьи закрыть за вами дверь.</li>
                        <li>Вышли посмотреть почтовый ящик или зашли к соседям на минутку - закрывайте обязательно за собой дверь.</li>
                        <li>Не листайте газеты и журналы около почтового ящика.</li>
                        <li>Не выглядывайте на лестничную площадку в тёмное время суток.</li>
                    </ol>
                    <img class="ebook-img" src="https://s3.amazonaws.com/bvsystem_tmp/pages/1868/original/Night-Home-Invasions-frontpointsecurity.jpg" alt="photo">
                    <ol start="11">
                        <li>Не подходите к двери, даже если слышите крики о помощи. Скажите взрослым или позвоните в полицию.</li>
                        <li>Если дом оборудован домофоном, наберите номер своей квартиры и попросите родственников встретить вас.</li>
                    </ol>
                </div>
            </div>
            <div id="page3" style="display: none;">
                <img class="ebook-img" src="https://babyexpo.ua/upload/resize_cache/iblock/e8f/1_0_1/1464689142_1401434678_fotosearch_k3930124.jpg" alt="Happy Children">
                <div class="ebook-text">
                    <p>
                        Выполняя эти правила, вы ограничите себя от возможности попасть в непредвиденную ситуацию.
                        Помните! Столкнувшись с незнакомцем у подъезда дома, в лифте или на лестничной площадке, звонок в дверь или по телефону, могут стать неожиданностью только для человека неподготовленного.
                        Выполняйте эти несложные рекомендации и непредвиденные моменты при встрече с незнакомыми людьми для вас будут маловероятны.
                    </p>
                </div>
                <div>
                    <iframe src="https://www.youtube.com/embed/G1Nk6cVp0TY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <?php include'assets/include/e-book-sidebar.php' ?>
    </div>
    <?php include'assets/include/footer.php' ?>
</div>
<script src="assets/js/e-book.js"></script>
</body>
<a href="#top" id="to-top-button"><img src="assets/images/up.png" alt="up"></a>
</html>