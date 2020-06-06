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
        <link rel="stylesheet" href="assets/css/gallery.css">
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
                    <?php if (!isset($_SESSION['username'])) {
                        echo "<b>Внимание!</b> Так как Вы не авторизовались, часть контнента недоступна. Выполните авторизацию чтобы увидеть больше фотографий!";
                    }
                    ?>
                    <div id="gallery">
                        <div class="photo-col">
                            <h1>VolksWagen</h1>
                            <img src="https://www.vwimg.com/iris/iris?vehicle=2018_BU34MS_7CB_PYC_S0B_WYG_2017_12_10&paint=2B2B&fabric=BR&pov=E06%2CCGD&quality=90&bkgnd=transparent&RESP=PNG&x=500&y=1500&w=8000&h=5600&width=600" alt="Jetta">
                            <img src="https://www.vwimg.com/iris/iris?bkgnd=transparent&fabric=WR&paint=P2P2&pov=E06,CGN&quality=100&vehicle=2020_CA14NZ_2019_12_15&Resp=png&width=730&crop=0,0,600,315&y=-470&x=-220" alt="Atlas">
                            <img src="https://www.vwimg.com/iris/iris?vehicle=2019_5C23P6_2018_09_02&paint=V9V9&fabric=JU&pov=E06%2CCGD&quality=90&bkgnd=transparent&RESP=PNG&x=1200&y=2000&w=7000&h=5150&width=600" alt="Beetle">

                            <?php if (isset($_SESSION['username'])) { ?>
                                <img src="https://www.vwimg.com/iris/iris?vehicle=2019_5C83P6_W2L_2018_09_02&paint=2BSM&fabric=NJ&pov=E06%2CCGD&quality=90&bkgnd=transparent&RESP=PNG&x=500&y=1500&w=8000&h=5600&width=600" alt="Beetle Convertible">
                                <img src="https://purepng.com/public/uploads/large/purepng.com-gray-volkswagen-phideon-front-view-carcarvehicletransportvolkswagen-961524646684obfk2.png" alt=" Volkswagen Phideon">
                            <?php } ?>
                        </div>
                        <div class="photo-col">
                            <h1>Mercedes-benz</h1>
                            <img src="https://pngimg.com/uploads/mercedes/mercedes_PNG80199.png" alt="mercedes">
                            <img src="https://pngimg.com/uploads/mercedes/mercedes_PNG1844.png" alt="mersedes">
                            <img src="https://pluspng.com/img-png/mercedes-png-mercedes-amg-gt-s-car-png-image-2128.png" alt="mercedes">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <img src="http://www.pngmart.com/files/5/Mercedes-Benz-PNG-Free-Download.png" alt="mercedes">
                                <img src="http://www.pngmart.com/files/5/Mercedes-Benz-PNG-Transparent-Image.png" alt="mercedes">
                            <?php } ?>
                        </div>
                        <div class="photo-col">
                            <h1>BMW</h1>
                            <img src="https://pngimg.com/uploads/bmw/bmw_PNG1689.png" alt="bmw">
                            <img src="https://clipart-db.ru/file_content/rastr/bmw_010.png" alt="bmw">
                            <img src="https://pngimg.com/uploads/bmw/bmw_PNG1672.png" alt="bmw">
                            <img src="https://pluspng.com/img-png/bmw-png-bmw-x5-png-pic-1700.png" alt="bmw">
                            <?php if (isset($_SESSION['username'])) { ?>
                                <img src="https://www.pngarts.com/files/4/BMW-PNG-Background-Image.png" alt="bmw">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php include'assets/include/sidebar.php' ?>
            </div>
            <?php include'assets/include/footer.php' ?>
        </div>
    </body>
    <a href="#top" id="to-top-button"><img src="assets/images/up.png" alt="up"></a>
</html>