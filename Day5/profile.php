<?php
include "base.php";
require('connection.php');

if (isset($_SESSION['loginId'])) {
    $userID = $_SESSION['loginId'];

    $query = "select * from user where id='$userID'";
    $sqlQuery = $connection->prepare($query);  
    $sqlQuery->execute();
    $result = $sqlQuery->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        header("location:login.php?message=you must login first");
        exit;
    }
}else {
    header("Location: login.php?message=you must login first");  
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET["loginmessage"])) {
        echo "<p class='alert alert-success w-75 m-auto text-center'>" . $_GET["loginmessage"] . "</p";
    }
    if (isset($_GET["message"])) {
        echo "<p class='alert alert-danger w-75 m-auto text-center'>" . $_GET["message"] . "</p";
    }
    ?>
    <h1 class="text-success text-center">User Profile</h1>

   <a href="logout.php"> <button type="button" class="btn btn-danger m-5"> LogOut</button></a>
</body>

</html>