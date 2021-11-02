<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #lortu dugu aldatu nahi dugun erabiltzailearen LDAP

$pass= $_POST['pasahitza'];
$izena= $_POST['izena'];
$abizena= $_POST['abizena'];
$nan= $_POST['NAN'];
$telef= $_POST['telefono'];
$mail= $_POST['mail'];
$data= $_POST['date'];
$gradua= $_POST['gradua'];

$erabiltzaile = "SELECT * FROM `Erabiltzaile` WHERE `LDAP` = '$LDAP'";
$rst=mysqli_query($conn,$erabiltzaile);
$row = mysqli_fetch_array($rst);

$sql="UPDATE `Erabiltzaile` SET `Pasahitza`='$pass',`Izena`='$izena',`Abizena`='$abizena',`NAN`='$nan',`Telefono`='$telef',`Mail`='$mail',`JaioData`='$data',`Gradua`='$gradua' WHERE `LDAP` = '$LDAP'";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="es">

  <?php require "partials/head.php";?> 

  <body>
    <header>
     <div class="cover d-flex justify-content-center align-items-center flex-column p-5">
        <h1 style="font-family:cambria"> Zure profila </h1>
      </div>
    </header>

  <body>
    <div class=" d-flex justify-content-center align-items-center">
      <form action="profilaAldatu.php" method="POST" name="profilaForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <br />
            <label>LDAP</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['LDAP']}' id='LDAP2'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <br />
            <label>Pasahitza</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Pasahitza']}'/>
            ";?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Izena</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Izena']}'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <label>Abizena</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Abizena']}'/>
            ";?>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>NAN</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['NAN']}' id='NAN2'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <label>Telefono zenbakia</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Telefono']}' id='tel2'/>
            ";?>
          </div>
        </div>

        <div class="form-group ">
          <label>E-mail</label>
          <?php echo"
                <input type='text' class='form-control'  value='{$row['Mail']}' id='mail2'/>
            ";?>
        </div>

        <div class="form-group ">
          <label class="control-label">Jaiotza data </label>
          <?php echo"
                <input type='date' class='form-control'  value='{$row['JaioData']}'/>
            ";?>
        </div>

        <div class="form-group">
          <label>Gradua</label>
          <select name="gradua" class="form-control">
            <option selected><?php echo"{$row['Gradua']}";?></option>
            <option> Ingenieritza informatikoa</option>
            <option>Ingenieritza Mekanikoa</option>
            <option>Ingenieritza Elektronikoa</option>
            <option>Ingenieritza Industriala</option>
          </select>
        </div>

        <input class="btn btn-outline-success" type="button" value="Bidali" onclick="konprobaketa2()">
        <a class="btn btn-outline-danger" type="button"  href="index.php">Atzera</a>
      </form>
    </div>

    <footer class="footer"></footer>
  </body>
</html>
