<?php 
require('inde.php');
include('../base.php');
// $allUsersData=$database->index("users");
$userID=$_GET['id'];
if(!$userID)
{
   include('./pageNotFound.php');
   exit;


}else{
    $userData=$database->show("user",$userID);
    if(!$userData)
    {
        include('./pageNotFound.php');
       exit;

}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table>
    <thead>
        <td>Id</td>
        <td>name</td>
        <td>Email</td>
        <td>Action</td>
    </thead>

    <tbody>
     <?php 
  
        # code...
        echo "<tr>";
        echo "<td>";
        echo $userData['id'];
        echo "</td>";
        echo "<td>";
        echo $userData['name'];
        echo "</td>";
        echo "<td>";
        echo $userData['email'];
        echo "</td>";
        echo "<td>";
        echo "<div>";
      
     
        echo "
        <a href='./allUsers.php'>
        <button  class='btn btn-info'>Back</button>
         </a>
         ";
    
        echo "</div>";
        echo "</td>";


        echo "</tr>";

     
     
     
     ?> 
    </tbody>
</table>
</body>
</html>