<?php
    $money_before = filter_input(INPUT_POST, 'money_before', FILTER_VALIDATE_FLOAT);
    $increase_rate = filter_input(INPUT_POST, 'increase_rate', FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);
    $error = '';
    if ($money_before === false) {
        $error = 'Investment must be a valid number.'; 
    } else if ($money_before <= 0 ) {
        $error = 'Investment must be greater than zero.'; 
    } else if ($increase_rate === false)  {
        $error = 'Interest rate must be a valid number.'; 
    } else if ($increase_rate <= 0) {
        $error = 'Interest rate must be greater than zero.'; 
    } else if ($years === false) {
        $error = 'Years must be a valid whole number.';
    } else if ($years <= 0) {
        $error = 'Years must be greater than zero.';
    } else if ($years > 30) {
        $error = 'Years must be less than 31.';
    }

    if ($error != '') {
        include('index.php');
        exit(); 
    }

    $result = $money_before;
    for ($i = 1; $i <= $years; $i++) {
        $result += $result * ($increase_rate/100); 
    }

    $investment_f = '$'.number_format($money_before, 2);
    $yearly_rate_f = $increase_rate.'%';
    $future_value_f = '$'.number_format($result, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
    </main>
</body>
</html>
