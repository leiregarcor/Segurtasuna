<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #lortu dugu aldatu nahi dugun erabiltzailearen LDAP

#form-etik lortutako datuak
$id= $_POST['id'];
$irakasgaia= $_POST['irakasgaia'];
$gradua= $_POST['gradua'];
$kurtsoa= $_POST['kurtsoa'];
$fitx= $_POST['fitxategia'];
$ErabLDAP= $_POST['erabLDAP'];

#datu basean apuntea sartutako datuekin eguneratzeko sql query-a
#EGUNERAKETA SOILIK GAUZATUKO DA APUNTEEN JABEAK EGITEN BADU ALDAKETA
$sql="UPDATE `Apunte` SET `Id`='$id',`IgotzeData`= CURDATE(),`Irakasgaia`='$irakasgaia',`Gradua`='$gradua',`Kurtsoa`='$kurtsoa',`Fitxategia`='$fitx',`ErabLDAP`='$LDAP' WHERE `Id`='$id'AND `ErabLDAP`='$LDAP' ";
$query = mysqli_query($conn, $sql);
if($query){
  header("Location: http://localhost:81/index.php");
  exit;
}
?>
