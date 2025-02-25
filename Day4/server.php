<?php


$name=$_POST["name"]; 
$email=$_POST["email"];
$password=$_POST["password"];
$image = $_FILES["image"];


$filename= "data.json";
$validExtensions=["jpeg","jpg","png"];
if (!is_dir('images')) {
    mkdir('images', 0777, true);
}
$imgExtension = strtolower(pathinfo($image["name"], PATHINFO_EXTENSION));
$newImage = "images/" . time() . '.' . $imgExtension;
move_uploaded_file($image["tmp_name"],$newImage);
if(!file_exists($filename))
{
    file_put_contents("data.json","[]");
}
else{
    $user=[
        "name"=>$name,
        "email"=>$email,
        "password"=>$password,
        "image"=>  $newImage
    ];
    $data=file_get_contents("data.json");
    $dbDcoded=json_decode($data,true);
    $dbDcoded[]=$user;
    $newData=json_encode($dbDcoded);
    file_put_contents("data.json",$newData);
    
    
}

header("location: ./login.php");




?>