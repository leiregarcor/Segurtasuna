<?php
require "DBKonexioa.php";

session_start();
    
    #form-etik lortutako datuak 
    $erabiltzaile= $_POST['LDAP'];
    $pass= $_POST['pasahitz'];

    #SQL injection ekiditzeko erabiltzailea eta pasahitzak garbitu behar ditugu
    $garbitutako_erabiltzaile = mysqli_real_escape_string($conn, $erabiltzaile);      
    $garbitutako_pass = mysqli_real_escape_string($conn, $pass);
    $pass=md5($garbitutako_pass);

    #sartutako erabiltzaile eta pasahitza erregistratuta daudela konprobatzeko sql query-a      
    $sql ="SELECT * FROM `Erabiltzaile` WHERE `LDAP` = '$garbitutako_erabiltzaile' and `Pasahitza` = '$pass'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);

    if($row['LDAP']!=null){ #erabiltzailea erregistratuta egotekotan 
      $_SESSION['LDAP'] = $erabiltzaile;  
      $_SESSION['Gradu'] = $row['Gradua'];
      $_SESSION['denbora']= date("Y-n-j H:i:s");    
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
    
    <?php require 'partials/footer.php' ?>

  </body>
</html>
