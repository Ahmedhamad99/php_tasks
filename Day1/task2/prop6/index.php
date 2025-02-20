<form method="post">
    <input type="text" name="number1" placeholder="number1">
    <button type="submit">submit</button>
</form>

<?php


$numbers = explode(" ",$_POST["number1"]);
$num1 = (int)$numbers[0];
$num2 = (int)$numbers[1];
$num3 = (int)$numbers[2];

if($num1%$num3==0 & $num2%$num3== 0) {  
    echo "Both";
}
else
{
    echo "Memo";
}
?>