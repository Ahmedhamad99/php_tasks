<?php 
$dbType="mysql";
$dbName="users";
$host="localhost:3307";
$userName="root";
$userPassword="";
$connection=new PDO("$dbType:host=$host;dbname=$dbName",$userName,$userPassword);
session_start();

?>