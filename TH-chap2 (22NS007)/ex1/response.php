<?php
	$product_description = filter_input(INPUT_POST, 'product_description');
	$list_price = filter_input(INPUT_POST, 'list_price');
	$discount_percent = filter_input(INPUT_POST, 'discount_percent');

    $list_price_f = '';
    $discount_percent_f = '';
    $discount_f = '';
    $discount_price_f = '';

    $error = '';

    if(!$product_description || (!$list_price || is_numeric($list_price))==false || (!$discount_percent || is_numeric($discount_percent)==false)) {
        if(!$product_description) {
            $error .= 'Product description is incorrect !<br>';
        }
        if(!$list_price || is_numeric($list_price)==false) {
            $error .= 'List price is incorrect !<br>';
        }
        if(!$discount_percent || is_numeric($discount_percent)==false) {
            $error .= 'Discount percent is incorrect !<br>';
        }
    } else {
        $discount = $list_price * $discount_percent * .01;
        $discount_price = $list_price - $discount;
        
        $list_price_f = "$".number_format($list_price, 2);
        $discount_percent_f = $discount_percent."%";
        $discount_f = "$".number_format($discount, 2);
        $discount_price_f = "$".number_format($discount_price, 2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <?php 
            if($error!='') {
                echo '<h1>Error!</h1><h2>'.$error.'</h2>';
            } else {
                echo         
                '<h1>Product Discount Calculator</h1>'.

                '<label>Product Description:</label>'.
                '<span>'.htmlspecialchars($product_description).'</span><br>'.
                '<label>List Price:</label>'.
                '<span>'.htmlspecialchars($list_price_f).'</span><br>'.
                '<label>Standard Discount:</label>'.
                '<span>'.htmlspecialchars($discount_percent_f).'</span><br>'.
                '<label>Discount Amount:</label>'.
                '<span>'.$discount_f.'</span><br>'.
                '<label>Discount Price:</label>'.
                '<span>'.$discount_price_f.'</span><br>';
            } 
        ?>
    </div>
</body>
</html>
