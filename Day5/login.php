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
    if(isset($_GET["Registermessage"]))
    {
       echo "<p class='alert alert-success w-75 m-auto text-center'>".$_GET["Registermessage"] ."</p";
    }
    if(isset($_GET["message"]))
    {
       echo "<p class='alert alert-danger w-75 m-auto text-center'>".$_GET["message"] ."</p";
    }
    
    ?>
<form class="w-75 m-auto" method="post" action="server.php">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password"type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-primary" name="btnLogin">Submit</button>
</form>
</section>
</body>
</html>