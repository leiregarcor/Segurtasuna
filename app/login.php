<?php
require "DBKonexioa.php";

session_start();

    $erabiltzaile= $_POST['LDAP'];
    $pass= $_POST['pasahitz'];
      
    $sql ="SELECT * FROM `Erabiltzaile` WHERE `LDAP` = '$erabiltzaile' and `Pasahitza` = '$pass'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    if($row['LDAP']!=null){ 
      $_SESSION['LDAP'] = $erabiltzaile;  
      $_SESSION['Gradu'] = $row['Gradua'];   
      header("Location: http://localhost:81/index.php");
      exit;      
    }
?> 

<!DOCTYPE html>
<html lang="es">
  <head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      href="./assets/Icono.gif"
    />

    <title>ApunteenBankua</title>

    <!-- Import the webpage's stylesheet -->
    <link rel="stylesheet" href="./style.css" />
    <link
      rel="stylesheet"
      href="./css/bootstrap.min.css"
    />

    <!-- Import the webpage's javascript file -->
    <script type="text/javascript" src="./funtzioak.js"></script>

  </head>

  <body>
  <?php require 'partials/header.php' ?>

    <div class=" d-flex justify-content-center align-items-center">
      <form action="login.php" method="POST" >
        <div class="form-group ">
          <br/>        
          <label>LDAP</label>
          <input name="LDAP" id="LDAP" type="text" class="form-control" placeholder="123456" required/>
        </div>

        <div class="form-group ">
          <label>Pasahitza</label>
          <input name="pasahitz" id="pasahitz" type="password" class="form-control" placeholder="Pasahitza" required />
        </div>

        <div>
          <input
            class="btn btn-outline-success"
            type="submit"
            value="Sartu"
          />
          <a class="btn btn-outline-primary" href="erregistro.php" role="button">Erregistratu</a>
        </div>
      </form>
    </div>
    
    <footer class="footer">
      <button type="button" class="btn btn-social-icon btn-outline-twitter" onclick="location.href='erregistro.php'"><i class="fa fa-twitter"></i></button>      
      <button type="button" class="btn btn-social-icon btn-outline-github" onclick="location.href='erregistro.php'"><i class="fa fa-github"></i></button>         
    </footer>

  </body>
</html>