<html>
<head>
    <title>Program 12</title>
    <style>
        input {
            border: solid 2px;
            padding: 5px;
            font-size: 28px;
        }
    </style>
</head>
<body>
<h1>PHP - Calculate Electricity Bill</h1>
<form method="post">
    <input type="number" name="units" placeholder="Please enter no. of Units" />
    <input type="submit" name="unit-submit" value="Submit" />
</form>
<?php
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];

    if (!empty($units)) {
        $result = calculate_bill($units);
        echo "<h2>Total amount for $units units = ₹ $result</h2>";
    }
}
function calculate_bill($units) 
{
    $unit_cost_first  = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third  = 5.20;
    $unit_cost_fourth = 6.50;
    if ($units <= 50) {
        $bill = $units * $unit_cost_first;
    }
    else if ($units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    }
    else if ($units <= 200) {
        $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second);
        $remaining_units = $units - 100;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    }
    else {
        $temp = (50 * $unit_cost_first) + (50 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 200;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
    }
    return number_format($bill, 2, '.', '');
}
?>
</body>
</html>
