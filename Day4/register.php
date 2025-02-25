<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./server.php" method="post" enctype="multipart/form-data">
        <label for="name">Name</label><br>
        <input type="text" name="name" id=""><br>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="pass">Password</label><br>
        <input type="password" name="password"><br>
        <input type="file" name="image"><br>
        <button type="submit" name="register">Submit</button>
    </form>
</body>
</html>