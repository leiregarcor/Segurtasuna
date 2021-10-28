<?php
require "DBKonexioa.php";
session_start();

    $erabiltzaile= $_POST['LDAP'];
    $pass= $_POST['pasahitz'];
      
    $sql ="SELECT * FROM `Erabiltzaile` WHERE `LDAP` = '$erabiltzaile' and `Pasahitza` = '$pass'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    if($row['LDAP']!=null){
      header("Location: http://localhost:81/index.php");
      exit;
      
    }else{
      echo '<script language="javascript">alert( "error usuario o contraseña incorrectos.");</script>';
      header("Location: http://localhost:81/login.php");
      exit;
    }
  

?>      