<?php 
    if (!isset($money_before)) { 
        $money_before = ''; 
    } 
    if (!isset($increase_rate)) { 
        $increase_rate = ''; 
    } 
    if (!isset($years)) { 
        $years = ''; 
    } 
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2 - Future Value Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Future Value Calculator</h1>
        <?php if (!empty($error)) {
            echo '<p class="error">'.htmlspecialchars($error).'</p>';
        } ?>
        
        <form action="response.php" method="post">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="money_before" value="<?php echo htmlspecialchars($money_before); ?>">
                <br>
                <label>Yearly Interest Rate:</label>
                <input type="text" name="increase_rate" value="<?php echo htmlspecialchars($increase_rate); ?>">
                <br>
                <label>Number of Years:</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>">
                <br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
</body>
</html>