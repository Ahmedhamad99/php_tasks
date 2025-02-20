<form method="post">
    <input type="text" name="number1" placeholder="number1">
    <input type="text" name="number2" placeholder="number2">
    <button type="submit">submit</button>
</form>

<?php

$numbers = $_POST;

// var_dump($numbers);

$adding = $numbers["number1"] + $numbers["number2"];

$sub = $numbers["number1"] - $numbers["number2"];
$multi = $numbers["number1"] * $numbers["number2"];

echo $numbers["number2"]."+".$numbers["number1"]." =".$adding."<br>";
echo $numbers["number2"]."-".$numbers["number1"]." =".$sub."<br>";
echo $numbers["number2"]."*".$numbers["number1"]." =".$multi."<br>";

?>