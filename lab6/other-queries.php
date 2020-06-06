<?php
session_start();
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
                    <h3>Здесь вы можете ознакомиться со списком продуктов</h3>
                    <p>При необходимости, воспользуйтесь фильтрами ниже:</p>
                    <form action="other-queries.php" method="get">
                        <label for="company-name">Компания: </label>
                        <select name="company-name" id="company-name">
                            <option value="any">любая</option>
                            <?php
                            // php code to get each company and adding it to options

                            require_once 'assets/include/connection.php';
                            $dbLink = databaseConnect();

                            $sql = "SELECT company_name FROM companies ORDER BY company_name";

                            $query_result = mysqli_query($dbLink, $sql);

                            while ($res = mysqli_fetch_assoc($query_result)) {
                                $company = $res['company_name'];
                                echo "<option value='$company'>$company</option>";
                            }
                            ?>
                        </select>
                        <span> | </span>
                        <label for="price-sort">Цена: </label>
                        <select name="price-sort" id="price-sort">
                            <option value="ascending">от дешевых к дорогим</option>
                            <option value="descending">от дорогих к дешевым</option>
                        </select>
                        <input style="margin-top: 10px" type="submit" class="form-btn" value="Посмотреть">
                    </form>
                    <br>
                    <form action="other-queries.php" method="get">
                        <label for="product_id">Или найдите продукт по его id: </label>
                        <input type="number" name="product_id" id="product_id" value="1">
                        <input style="margin-top: 10px" type="submit" class="form-btn" value="Найти">
                    </form>
                    <br>
                    <?php
                    // outputting all necessary data in a table
                    if(isset($_GET['company-name']) && isset($_GET['price-sort'])) {

                        $sql = "SELECT products.product_name, companies.company_name, products.price, products.description FROM products JOIN companies ON products.company_id = companies.company_id";

                        $company_name = mysqli_real_escape_string($dbLink, $_GET['company-name']);
                        $price_sort = mysqli_real_escape_string($dbLink, $_GET['price-sort']);

                        if ($_GET['company-name'] != 'any') {
                            $sql .= " WHERE companies.company_name = '$company_name'";
                        }

                        if ($_GET['price-sort'] == 'ascending') {
                            $sql .= " ORDER BY products.price ASC";

                        } elseif ($_GET['price-sort'] == 'descending') {
                            $sql .= " ORDER BY products.price DESC";

                        } else {
                            die("Bad filter!");
                        }

                        $query_result = mysqli_query($dbLink, $sql);

                        echo "<table border='1px' rules='all' style='text-align: left;'; margin: 10px;'>";
                        echo "<tr><td><b>Наименование</b></td><td><b>Компания</b></td><td><b>Цена</b></td><td><b>Описание</b></td></tr>";
                        while ($row = mysqli_fetch_assoc($query_result)) {
                            echo "<tr>";
                            foreach ($row as $item) {
                                echo '<td style="white-space: pre-line">' . $item . '</td>';
                            }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }

                    if (isset($_GET['product_id'])) {
                        $product_id = mysqli_real_escape_string($dbLink, $_GET['product_id']);

                        $sql = "SELECT products.product_name, companies.company_name, products.price, products.description" .
                            " FROM products JOIN companies ON products.company_id = companies.company_id" .
                            " WHERE products.product_id = '$product_id'";

                        $query_result = mysqli_query($dbLink, $sql);

                        $row = mysqli_fetch_assoc($query_result);

                        if (empty($row)) {
                            echo "<p>Продукта с номером id = " . $product_id . " не существует!</p>";
                        } else {
                            echo "<p>К Вашему вниманию продукт с номером id = " . $product_id . ".</p>";
                            echo "<table border='1px' rules='all' style='text-align: left;'; margin: 10px;'>";
                            echo "<tr><td><b>Наименование</b></td><td><b>Компания</b></td><td><b>Цена</b></td><td><b>Описание</b></td></tr>";
                            echo "<tr>";
                            foreach ($row as $item) {
                                echo '<td style="white-space: pre-line">' . $item . '</td>';
                            }
                            echo "</tr>";
                            echo "</table>";
                        }
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