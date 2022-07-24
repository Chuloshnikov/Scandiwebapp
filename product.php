<?php
if (isset($_GET)) {
    $skuform = $_GET['sku'];
    $nameform = $_GET['name'];
    $priceform = $_GET['price'];
    $mysqli = new mysqli("localhost", "root", "", "products");
    if ($mysqli->connect_errno) {
        echo "Sorry, there was a problem with the connection.";
        exit;
    }
    $sku = '"' .$mysqli->real_escape_string($skuform).'"';
    $name = '"' .$mysqli->real_escape_string($nameform).'"';
    $price = '"' .$mysqli->real_escape_string($priceform).'"';
    if ($_GET['productType'] == 'DVD') {
        $sizeform = $_GET['size'];
        $size = '"' .$mysqli->real_escape_string($sizeform).'"';
        $query = "INSERT INTO DVD (sku, name, price, size) VALUES ($sku, $name, $price, $size)";
        $querySku = "INSERT INTO sku (sku) VALUES ($sku)";
        $result = $mysqli->query($query);
        if ($result) {
            print('Successfully' . "<br>");
            header("Location: index.php");
            exit;

        }
        $mysqli->close();
    } else if ($_GET['productType'] == 'Book') {
        $weightform = $_GET['weight'];
        $weight = '"' .$mysqli->real_escape_string($weightform).'"';
        $query = "INSERT INTO Book (sku, name, price, weight) VALUES ($sku, $name, $price, $weight)";
        $querySku = "INSERT INTO sku (sku) VALUES ($sku)";
        $result = $mysqli->query($query);
        if ($result) {
            print('Successfully' . "<br>");
            header("Location: index.php");
            exit;
        }
        $mysqli->close();
    } else if ($_GET['productType'] == 'Furniture') {
        $heightform = $_GET['height'];
        $widthform = $_GET['width'];
        $lengthform = $_GET['length'];
        $height = '"' .$mysqli->real_escape_string($heightform).'"';
        $width = '"' .$mysqli->real_escape_string($widthform).'"';
        $length = '"' .$mysqli->real_escape_string($lengthform).'"';
        $query = "INSERT INTO Furniture (sku, name, price, height, width, length) VALUES ($sku, $name, $price, $height, $width, $length)";
        $querySku = "INSERT INTO sku (sku) VALUES ($sku)";
        $result = $mysqli->query($query);
        if ($result) {
            print('Successfully' . "<br>");
            header("Location: index.php");
            exit;
        }
        $mysqli->close();
    }
}