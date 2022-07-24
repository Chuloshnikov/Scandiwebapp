<?php



require_once "connect.php";
    $sku = $_GET['sku'];
    
    if (isset($sku)) {
        $del1 = "DELETE FROM `book` WHERE `sku` IN ('".implode("','",$sku)."')";
        $del2 = "DELETE FROM `dvd` WHERE `sku` IN ('".implode("','",$sku)."')";
        $del3 = "DELETE FROM `furniture` WHERE `sku` IN ('".implode("','",$sku)."')";
        $result1 = $connect->query($del1);
        $result2 = $connect->query($del2);
        $result3 = $connect->query($del3);
    } 


    
    $new_url = 'index.php';
    header('Location: '.$new_url);

    ?>  
