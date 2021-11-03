<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #lortu dugu aldatu nahi dugun erabiltzailearen LDAP

$pass= $_POST['pasahitza'];
$izena= $_POST['izena'];
$abizena= $_POST['abizena'];
$nan= $_POST['NAN2'];
$telef= $_POST['tel2'];
$mail= $_POST['mail2'];
$data= $_POST['date'];
$gradua= $_POST['gradua'];

$sql="UPDATE `Erabiltzaile` SET `Pasahitza`='$pass',`Izena`='$izena',`Abizena`='$abizena',`NAN`='$nan',`Telefono`='$telef',`Mail`='$mail',`JaioData`='$data',`Gradua`='$gradua' WHERE `LDAP` = '$LDAP'";
$query = mysqli_query($conn, $sql);
?>