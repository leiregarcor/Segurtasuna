<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #lortu dugu aldatu nahi dugun erabiltzailearen LDAP

#form-etik lortutako datuak
$passN= $_POST['pasahitza'];
$izena= $_POST['izena'];
$abizena= $_POST['abizena'];
$nan= $_POST['NAN2'];
$telef= $_POST['tel2'];
$mail= $_POST['mail2'];
$data= $_POST['date'];
$gradua= $_POST['gradua'];
$bankuaN= $_POST['banku'];
$bankua= openssl_encrypt($bankuaN,"AES-128-ECB","segur");

#datu basea eguneratzeko sql query-a

if($passN==''){
  $sql="UPDATE `Erabiltzaile` SET `Izena`='$izena',`Abizena`='$abizena',`NAN`='$nan',`Telefono`='$telef',`Mail`='$mail',`JaioData`='$data',`Gradua`='$gradua',`BankuKontu`='$bankua' WHERE `LDAP` = '$LDAP'";
}
else{
  $pass= password_hash($passN, PASSWORD_DEFAULT);
  $sql="UPDATE `Erabiltzaile` SET `Pasahitza`='$pass',`Izena`='$izena',`Abizena`='$abizena',`NAN`='$nan',`Telefono`='$telef',`Mail`='$mail',`JaioData`='$data',`Gradua`='$gradua',`BankuKontu`='$bankua' WHERE `LDAP` = '$LDAP'";
}
$query = mysqli_query($conn, $sql);
if($query){
  header("Location: http://localhost:81/index.php");
  exit;
}
?>
