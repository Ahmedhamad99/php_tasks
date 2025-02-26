<?php 
include "base.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="m-5">
    <?php
    if(isset($_GET["message"]))
    {
       echo "<p class='alert alert-danger w-75 m-auto text-center'>".$_GET["message"] ."</p";
    }
    
    ?>
<form class="w-75 m-auto" method="post" action="server.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">User Name </label>
    <input name="name"type="name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password"type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <input type="file" name="image">

  <button type="submit" class="btn btn-primary" name="btnRegister">Submit</button>
</form>
</section>
</body>
</html>