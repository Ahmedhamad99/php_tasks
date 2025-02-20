<form method="post">
    <input type="text" name="number1" placeholder="number1">
    <!-- <input type="text" name="number2" placeholder="number2"> -->
    <button type="submit">submit</button>
</form>

<?php

$numbers = $_POST;


$first_digit = (int) substr($numbers["number1"], 0, 1);

        
        if ($first_digit % 2 == 0) {
            echo "<p>EVEN</p>";
        } else {
            echo "<p>ODD</p>";
        }



?>





