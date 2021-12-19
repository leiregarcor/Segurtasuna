<?php
require "DBKonexioa.php";

session_start();
    
    #form-etik lortutako datuak 
    $erabiltzaile= $_POST['LDAP'];
    $pass= $_POST['pasahitz'];

    #SQL injection ekiditzeko erabiltzailea eta pasahitzak garbitu behar ditugu
    $garbitutako_erabiltzaile = mysqli_real_escape_string($conn, $erabiltzaile);      
    $garbitutako_pass = mysqli_real_escape_string($conn, $pass);

    #sartutako erabiltzaile eta pasahitza erregistratuta daudela konprobatzeko sql query-a      
    $sql ="SELECT * FROM `Erabiltzaile` WHERE `LDAP` = '$garbitutako_erabiltzaile'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);


    if($row['LDAP']!=null){ #erabiltzailea erregistratuta egotekotan

      if(password_verify($garbitutako_pass, $row['Pasahitza'])){  #sarbidea arrakastatsua izan da

        #loggin erregistroa eramateko sql query-a
        $sql2 ="INSERT INTO `Logging`(`ErabId`, `DataOrdua`, `Arrakastatsua`) VALUES ('$garbitutako_erabiltzaile',LOCALTIME,1)";
        $query2 = mysqli_query($conn,$sql2);

        $_SESSION['LDAP'] = $erabiltzaile;  
        $_SESSION['Gradu'] = $row['Gradua'];
        $_SESSION['denbora']= date("Y-n-j H:i:s");    
        header("Location: http://localhost:81/index.php");
        exit; 
      }
      else{ #sarbidea ez da arrakastatsua izan
        #loggin erregistroa eramateko sql query-a
        $sql2 ="INSERT INTO `Logging`(`ErabId`, `DataOrdua`, `Arrakastatsua`) VALUES ('$garbitutako_erabiltzaile',LOCALTIME,0)";
        $query2 = mysqli_query($conn,$sql2);
      }    
    }
?> 

<!DOCTYPE html>
<html lang="es">
<?php require "partials/head2.php";?>

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
