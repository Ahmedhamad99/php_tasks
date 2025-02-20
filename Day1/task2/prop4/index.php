<form method="post">
    <input type="text" name="number1" placeholder="number1">
    <input type="text" name="number2" placeholder="number2">
    <button type="submit">submit</button>
</form>

<?php


$numbers = $_POST;
$num1 = $numbers["number1"] % 10;
$num2 = $numbers["number2"] % 10;

$sum = $num1+$num2;


echo "Difference = ".$sum;


?>