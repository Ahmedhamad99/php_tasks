<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="email">Email</label><br>
        <input type="email" name="email" id="">
        <label for="pass">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit" name="login">login</button>

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"])) {  
    
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $data_user = file_get_contents("data.json");
    $dbDcod=json_decode($data_user,true);

    foreach($dbDcod as $value){
        if ($value["email"] === $email && $value["password"] === $pass){
            
                header("location: ./data.php");
        }
    
    }}
        ?>
</body>
</html>