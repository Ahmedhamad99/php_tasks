<form method="post">
    <input type="text" name="number1" placeholder="number1">
    <!-- <input type="text" name="number2" placeholder="number2"> -->
    <button type="submit">submit</button>
</form>

<?php


$numbers = explode(" ",$_POST["number1"]);

$num1 = (int)$numbers[0];
$num2 = (int)$numbers[1];
$num3 = (int)$numbers[2];
$num4 = (int)$numbers[3];

$result = ($num1 * $num2) - ($num3 * $num4);
echo "Difference = ".$result;


?>