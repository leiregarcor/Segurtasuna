<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #lortu dugu aldatu nahi dugun erabiltzailearen LDAP

$id= $_POST['id'];
$irakasgaia= $_POST['irakasgaia'];
$gradua= $_POST['gradua'];
$kurtsoa= $_POST['kurtsoa'];
$fitx= $_POST['fitxategia'];

$sql="UPDATE `Apunte` SET `Id`='$id',`IgotzeData`= CURDATE(),`Irakasgaia`='$irakasgaia',`Gradua`='$gradua',`Kurtsoa`='$kurtsoa',`Fitxategia`='$fitx',`ErabLDAP`='$LDAP' WHERE `Id`='$id'";
$query = mysqli_query($conn, $sql);
if($query){
    header("Location: http://localhost:81/index.php");
    exit;
  }
?>