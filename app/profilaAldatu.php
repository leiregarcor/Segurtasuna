<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #lortu dugu aldatu nahi dugun erabiltzailearen LDAP

#form-etik lortutako datuak
$pass= $_POST['pasahitza'];
$izena= $_POST['izena'];
$abizena= $_POST['abizena'];
$nan= $_POST['NAN'];
$telef= $_POST['telefono'];
$mail= $_POST['mail'];
$data= $_POST['date'];
$gradua= $_POST['gradua'];
$bankua= $_POST['banku'];

#Erabiltzailearen datuak eskuratzeko sql query-a
$erabiltzaile = "SELECT * FROM `Erabiltzaile` WHERE `LDAP` = '$LDAP'";
$rst=mysqli_query($conn,$erabiltzaile);
$row = mysqli_fetch_array($rst);
$banku= openssl_decrypt($row['BankuKontu'],"AES-128-ECB","segur");

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

    <script type="text/javascript">
    var t;
    window.onload=resetTimer;
    document.onkeypress=resetTimer;
    document.onmousemove=resetTimer;
    function logout(){
      alert("Minutu batez inaktibo egoteagatik saioa ixten.");
      location.href='KonexioaAmaitu.php'; 
    }
    function resetTimer(){
      clearTimeout(t);
      t=setTimeout(logout,60000) //Minutu bateko inaktibitatea ms-etan
    }
    </script>

    <div class=" d-flex justify-content-center align-items-center">
      <form action="profilaAldaketaEgin.php" method="POST" name="profilaForm" id="profilaForm">
        <div class="form-row">
          <div class="form-group col-md-6">
            <br />
            <label>LDAP</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['LDAP']}' id='LDAP2' readonly/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <br />
            <label>Pasahitza</label>
            <?php echo"
                <input type='password' class='form-control' id='pasahitza' name='pasahitza'/>
            ";?>
            <div id="strengthMessage"></div>
            <br />
            <p style="font-size:60%;color:red;">Hutsik uzten bada pasahitza ez da aldatuko.</p>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Izena</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Izena']}' id='izena' name='izena'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <label>Abizena</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Abizena']}' id='abizena' name='abizena'/>
            ";?>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>NAN</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['NAN']}' id='NAN2' name='NAN2'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <label>Telefono zenbakia</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Telefono']}' id='tel2' name='tel2'/>
            ";?>
          </div>
        </div>

        <div class="form-group ">
          <label>E-mail</label>
          <?php echo"
                <input type='text' class='form-control'  value='{$row['Mail']}' id='mail2' name='mail2'/>
            ";?>
        </div>

        <div class="form-group ">
          <label class="control-label">Jaiotza data </label>
          <?php echo"
                <input type='date' class='form-control'  value='{$row['JaioData']}' id='date' name='date'/>
            ";?>
        </div>

        <div class="form-group">
          <label>Gradua</label>
          <select name="gradua" class="form-control" id='gradua'>
            <option selected><?php echo"{$row['Gradua']}";?></option>
            <option> Ingenieritza informatikoa</option>
            <option>Ingenieritza Mekanikoa</option>
            <option>Ingenieritza Elektronikoa</option>
            <option>Ingenieritza Industriala</option>
          </select>
        </div>
        <div class="form-group">
            <br />
            <label>Banku-kontu zenbakia</label>
            <?php echo"
                <input type='text' class='form-control' value='{$banku}' id='banku' name='banku'/>
            ";?>
          </div>

        <input class="btn btn-outline-success" type="button" value="Bidali" onclick="konprobaketa2()">
        <a class="btn btn-outline-danger" type="button"  href="index.php">Atzera</a>
      </form>
    </div>

    <?php require 'partials/footer.php' ?>
  </body>
</html>
