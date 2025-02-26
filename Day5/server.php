<?php
require('connection.php');

echo "<h1 class='text text-center'> Server Start </h1>";

if (isset($_POST['btnRegister'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_FILES["image"];
    
    $validExtensions = ["jpeg", "jpg", "png"];

    if (!is_dir('images')) {
        mkdir('images', 0777, true);
    }

    $imgExtension = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));

    if (!in_array($imgExtension, $validExtensions)) {
        header("location:register.php?message=Invalid image format (jpeg, jpg, png only)");
        exit;
    }

    
    $newImageName = time() . '.' . $imgExtension;
    $newImagePath = "images/" . $newImageName; 
    $fullImagePath = __DIR__ . "/" . $newImagePath; 

    
    if (!move_uploaded_file($image["tmp_name"], $fullImagePath)) {
        header("location:register.php?message=Error uploading image");
        exit;
    }

   
    $namePattern = "/^[a-zA-Z ]{3,}$/";
    if (!preg_match($namePattern, $name)) {
        header("location:register.php?message=Name must be characters and at least 3 characters long");
        exit;
    }

    $passwordPattern = "/^[0-9]{8,15}$/";
    if (!preg_match($passwordPattern, $password)) {
        header("location:register.php?message=Password must be 8-15 characters long");
        exit;
    }

   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("location:register.php?message=Invalid email format");
        exit;
    }

   
    $encPassword = md5($password);

    
    $checkEmail = "SELECT * FROM `user` WHERE email=:email";
    $emailQuery = $connection->prepare($checkEmail);
    $emailQuery->bindParam(':email', $email);
    $emailQuery->execute();
    $result = $emailQuery->fetch(PDO::FETCH_ASSOC);

    if ($result) {
        header("location:register.php?message=Email already exists");
        exit;
    }

    
    $query = "INSERT INTO user (name, email, password, image) VALUES (:name, :email, :password, :image)";
    $sqlQuery = $connection->prepare($query);
    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':email', $email);
    $sqlQuery->bindParam(':password', $encPassword);
    $sqlQuery->bindParam(':image', $newImagePath); 
    $response = $sqlQuery->execute();

    if ($response) {
        header("location:login.php?Registermessage=Registered Successfully");
        exit;
    }
}
?>