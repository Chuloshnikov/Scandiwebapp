<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Product ADD</title>
</head>
<body>
    <div class="wrapper">
        <div class="product__list">
            <div class="mein">
                <div class="product__list-header">
                    <h1 class="product__list-header-title">Product ADD</h1>
                    <div class="product__list-header-buttons">
                        <button class="product__list-header-button" form="product_form" type="submit" name="send">Save</button>
                        <a href="index.php" class="product__list-header-button">Cancel</a>
                    </div>
                </div>
                <div class="products-panel">
                    <form id="product_form" class="add-form" action="product.php" method="get" enctype="multipart/form-data"></span>
                        <div class="add-form-column"><label class="add-form-text">SKU:</label><input id="sku" class="input" name="sku" type="text" tabindex="1" required></div>
                        <div class="add-form-column"><label class="add-form-text">Name:</label><input id="name" class="input" name="name" type="text" tabindex="2" required></div>
                        <div class="add-form-column"><label class="add-form-text">Price ($):</label><input id="price" class="input" name="price" type="text" tabindex="3" required></div>
                        <div class="add-form-switcher">
                            <label class="add-form-text">Type Switcher:</label>
                                <div class="typeSwitcher_container">
                                    <select id="productType" name="productType" multiple="false" size="2" required tabindex="4">
                                        <option disabled="disabled">Type Switcher</option>
                                        <option class="DVD" id="DVD" value="DVD">DVD-disc</option>
                                        <option class="Book" id="Book" value="Book">Book</option>
                                        <option class="Furniture" id="Furniture" value="Furniture">Furniture</option>
                                    </select>
                                        <div class="switcher-dvd"><label for="DVD" class="add-form-text switcher-text">Size (MB):</label><input class="input" id="size" name="size" type="text"></input></div>
                                        <div class="switcher-book"><label for="Book" class="add-form-text switcher-text">Weight (KG):</label><input class="input" id="weight" name="weight" type="text"></input></div>
                                    <div class="switcher-furniture">
                                        <div><label for="Furniture" class="add-form-text switcher-text">Height (CM):</label><input class="input" id="height" name="height" type="text"></input></div>
                                        <div><label for="Furniture" class="add-form-text switcher-text" >Width (CM):</label><input class="input" id="width" name="width" type="text"></input></div>
                                        <div><label for="Furniture" class="add-form-text switcher-text">Length (CM):</label><input class="input" id="length" name="length" type="text"></input></div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                <div class="product__list-footer">
                    <p class="product__list-footer-text">Scandiweb Test assignment</p>
                </div>
            </div>   
        </div>
    </div>
    <script src="js/add.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>