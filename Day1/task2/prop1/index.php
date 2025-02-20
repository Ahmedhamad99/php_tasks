<form method="post">
    <input type="text" name="name" placeholder="name">
    <button type="submit">submit</button>
</form>




<?php

$name = $_POST;
echo "Hello, ".$name["name"];
?>