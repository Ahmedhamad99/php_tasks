<form method="post">
    <input type="number" name="number"  required min="10" max="99">
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
    $number = (int) $_POST['number'];

        
        $first_digit = (int) ($number / 10); 
        $second_digit = (int) ($number % 10); 

        if ($second_digit != 0 && $first_digit % $second_digit == 0 || 
            $first_digit != 0 && $second_digit % $first_digit == 0) {
            echo "<p>YES</p>";
        } else {
            echo "<p>NO</p>";
        }
    
}
?>