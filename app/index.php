<?php
require "DBKonexioa.php";

session_start();

$gradua="Ingenieritza informatikoa"; #hemen erabiltzailearen gradua jarriko dugu
$apunteak = "SELECT * FROM `Apunte` WHERE `Gradua` = '$gradua'";
$rst=mysqli_query($conn,$apunteak);

?> 

<!DOCTYPE html>
<html lang="es">

  <?php require "partials/head.php";?> 

  <body>
    <header>
     <div class="cover d-flex justify-content-center align-items-center flex-column p-5" >
        <h1 style="font-family:cambria"> Apunteen Bankua </h1>
        <p style="font-size:140%; font-family:cambria"> Ongi etorri gure apunteen bankura </p>
      </div>
    </header>
    
    
    <div class="container">
      <div class="row">
        <div class="col-sm-4">      
          <iframe src="https://open.spotify.com/embed/playlist/0aarL2CTxzVi8mDIvGNXmd?theme=0" width="95%" height="330" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
        </div>
        
        <div class="col-sm-8">
          <?php echo "<h3>{$gradua}</h3>"; ?>
          <a href="apunteaIgo.php" class="badge badge-success">Apunteak Igo</a>
          <br/>
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Maila</th>
                <th scope="col">Irakasgaia</th>
                <th scope="col">Apuntea</th>
                <th scope="col">Nork igo du</th>
                <th scope="col">Editatu</th>
                <th scope="col">Ezabatu</th>
              </tr>
            </thead>
            <tbody>
              <?php      
              while($row=mysqli_fetch_array($rst)){
                echo
                "<tr>
                  <td>{$row['Kurtsoa']}</td>
                  <td>{$row['Irakasgaia']}</td>         
                  <td><a href='{$row['Fitxategia']}' class='badge badge-info' target='blank'>LINK</a></td>
                  <td>{$row['ErabLDAP']}</td>
                  <td><a href='apunteaAldatu.php?id={$row['Id']}' class='badge badge-warning'>editatu</a></td>
                  <td><a href='apunteaEzabatu.php?id={$row['Id']}' class='badge badge-danger'>ezabatu</a></td>
                </tr>";
              }
              ?>
            </tbody>
          </table> 

        </div>

      </div>
    </div>

    <?php require 'partials/footer.php' ?>

  </body>
</html>
