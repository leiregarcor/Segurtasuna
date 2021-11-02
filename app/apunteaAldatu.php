<?php
require "DBKonexioa.php";

$id= $_GET['id']; #lortu dugu aldatu nahi dugun apuntearen Id

session_start();

$apunteak = "SELECT * FROM `Apunte` WHERE `Id` = '$id'";
$rst=mysqli_query($conn,$apunteak);
$row = mysqli_fetch_array($rst);
?>

<!DOCTYPE html>
<html lang="es">
    
    <?php require "partials/head.php";?>

  <body>
    <header>
     <div class="cover d-flex justify-content-start align-items-start flex-column p-5">

      </div>
    </header>

  <body>
    <div class=" d-flex justify-content-center align-items-center">
      <form action="apunteaAldatu.php" method="POST" >
        <br>
        <div class="form-row">
          <div class="form-group col-md-6">
            <br />
            <label>Gradua</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Gradua']}'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <br />
            <label>Kurtsoa</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Kurtsoa']}'/>
            ";?>
          </div>
        </div>
        <div>
            <label>Irakasgaia</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Irakasgaia']}'/>
            ";?>
            
        </div>
        <br>
        <div>
            <label>Egilea</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['ErabLDAP']}'/>
            ";?>
        </div>
        <br>
        <div>
          <label>Link</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Fitxategia']}'/>
            ";?>
        </div>
        <br>
        <!-- Aldatzeko/atzera joateko botoiak -->
        <a class="btn btn-outline-success" type="button" href="index.php"> Deuseztatu </a>         
        <input class="btn btn-outline-danger" type="reset" value="Aldatu" />
   
      </form>
    </div>

    <footer class="footer"></footer>
  </body>
</html>
