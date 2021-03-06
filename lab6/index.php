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
    </head>
    <body>
        <div class="wrapper">
            <a name="top"></a>
            <?php include'assets/include/header.php' ?>
            <div id="main">
                <div id="content">
                    <img src="https://www.alarm.com/images/blog/banner%20smart%20home%20security.jpg" alt="Modern security system">
                    <p>
                        Безопасность дома - это как оборудование для обеспечения безопасности на объекте, так и меры личной безопасности.
                    </p>
                    <ul>
                        <li>
                            <strong>Аппаратура безопасности</strong> включает в себя двери, замки, системы сигнализации, освещение, детекторы движения, системы камер видеонаблюдения и т.д, которые установлены на объекте.
                        </li>
                        <li>
                            <strong>Личная безопасность</strong> включает в себя такие действия, как обеспечение запертых дверей, активация аварийной сигнализации, закрытие окон, дополнительные ключи, не спрятанные снаружи и т.д.
                        </li>
                    </ul>
                    <p>
                        Согласно отчету ФБР, 58.3% краж со взломом в Соединенных Штатах были связаны с насильственным проникновением. Согласно последним статистическим данным, средняя кража со взломом в Соединенных Штатах длится <i>от 90 секунд до 12 минут</i>, и <i>в среднем грабитель врывается в дом в течение 60 секунд</i>. Большинство краж нацелены сначала на деньги, затем на драгоценности, наркотики и электронику. Обычные методы обеспечения безопасности включают в себя никогда не прятать запасные ключи снаружи, никогда не выключать свет, накладывать небольшие предупреждающие наклейки на двери и поддерживать хорошие контакты с соседями.
                    </p>
                    <img src="https://ae01.alicdn.com/kf/HTB1y7xupMmTBuNjy1Xbq6yMrVXa7.jpg" alt="warning sticker">
                </div>
                <?php include'assets/include/sidebar.php' ?>
            </div>
            <?php include'assets/include/footer.php' ?>
        </div>
    </body>
    <a href="#top" id="to-top-button"><img src="assets/images/up.png" alt="up"></a>
</html>