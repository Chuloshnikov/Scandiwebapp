<?php
    include_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Product List</title>
</head>
<body>
    <div class="wrapper">
        <div class="product__list">
            <div class="mein">
                <div class="product__list-header">
                    <h1 class="product__list-header-title">Product List</h1>
                    <div class="product__list-header-buttons">
                        <a href="add.php"  id="add-product-btn" class="product__list-header-button">ADD</a>
                        <button id="delete-product-btn" class="product__list-header-button mass-delete" form="product_list" type="submit">MASS DELETE</button>
                    </div>
                </div>
                <div class="products-panel">
                    <form id="product_list" class="checkbox-columns" action="delete.php" method="get" enctype="multipart/form-data">
                        <?php
                      $books = "SELECT * FROM Book";
                    if($result = $connect->query($books)){
                        foreach($result as $row){
                        $id = $row["id"];
                        $bookid = $row["sku"];
                        $bookname = $row["name"];
                        $bookprice = $row["price"];
                        $bookweight = $row["weight"];
                        print_r("<span class='checkbox-column'><input class='delete-checkbox' type='checkbox' name='sku[]' value='$bookid'><p> $bookid <br>$bookname <br>$bookprice$ <br>Weight: $bookweight KG</p></span>");
                      }
                        }
                        
                      $furn = "SELECT * FROM Furniture";
                      if($result = $connect->query($furn)){
                          foreach($result as $row){
                              $id = $row["id"];
                              $furnid = $row["sku"];
                              $furnname = $row["name"];
                              $furnprice = $row["price"];
                              $furnheight = $row["height"];
                              $furnwidth = $row["width"];
                              $furnlength = $row["length"];
                              print_r("<span class='checkbox-column'><input class='delete-checkbox' type='checkbox' name='sku[]' value='$furnid'><p> $furnid <br>$furnname <br>$furnprice$ <br>Dimension $furnheight x $furnwidth x $furnlength</p></span>");
                          }
                          
                      }
                      $dvds = "SELECT * FROM DVD";
                      if($result = $connect->query($dvds)){
                          foreach($result as $row){
                              $id = $row["id"]; 
                              $dvdid = $row["sku"];
                              $dvdname = $row["name"];
                              $dvdprice = $row["price"];
                              $dvdsize = $row["size"];
                              print_r("<span class='checkbox-column'><input class='delete-checkbox' type='checkbox' name='sku[]' value='$dvdid'><p> $dvdid <br>$dvdname <br>$dvdprice$ <br>Size: $dvdsize MB</p></span>");
                          }
                          
                      }

                        ?>
                        
                    </form>
                </div>
                <div class="product__list-footer">
                    <p class="product__list-footer-text">Scandiweb Test assignment</p>
                </div>
            </div>
            
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>