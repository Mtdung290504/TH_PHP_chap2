<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1 - Product Discount Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <h1>Product Discount Calculator</h1>
        <form action="response.php" method="post">
            <div id="data">
                <label for="product_description">Product Description: </label>
                <input id="product_description" name="product_description" type="text">
                <br>
                <label for="list_price">List Price: </label>
                <input id="list_price" name="list_price" type="text">
                <br>
                <label for="discount_percent">Discount Percent: </label>
                <input id="discount_percent" name="discount_percent" type="text"><span>%</span>
                <br>
            </div>
            <div id="button">
                <label>&ensp;</label>
                <input type="submit" value="Calculate Discount"><br>
            </div>
        </form>
    </div>
</body>
</html>