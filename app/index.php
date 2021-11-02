<?php
require "DBKonexioa.php";

session_start();

$IdEzabatu="";

$gradua=$_SESSION['Gradu']; #hemen erabiltzailearen gradua jarriko dugu
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
        <a href="profilaAldatu.php" class="badge badge-success">Profila editatu</a>
      </div>
    </header>

        
    <!-- Modal -->
    <div class="modal fade" id="modalEzabatu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Benetan ezabatu nahi duzu?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="apunteaEzabatu.php" method="POST" >
              <input name="id" type="hidden" id="id" value="id">

              <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="button" class="btn btn-success form-control" data-dismiss="modal">Ez</button>
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-danger form-control">Bai</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> <!-- Modal amaiera -->

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
                  <td><button id='btnModal' type='button' class='badge badge-danger' data-id='{$row['Id']}' data-toggle='modal' data-target='#modalEzabatu'>ezabatu</button></td>
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
