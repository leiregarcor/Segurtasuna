<?php
require "DBKonexioa.php";

session_start();

$id= $_POST['id']; #lortu dugu aldatu nahi dugun apuntearen Id

$apuntea = " DELETE FROM `Apunte` WHERE `Id` = '$id'";

$rst=mysqli_query($conn,$apuntea);

if($rst){
  header("Location: http://localhost:81/index.php");
    exit;  
}



?>