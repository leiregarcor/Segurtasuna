<?php
require "DBKonexioa.php";

session_start();

$id= $_GET['id']; #lortu dugu aldatu nahi dugun apuntearen Id

$LDAP= $_SESSION['LDAP']; #uneko erabiltzailearen LDAP

#aukeratutako apuntearen datu guztiak lortzeko egin bhear den sql query-a
$apunteak = "SELECT * FROM `Apunte` WHERE `Id` = '$id'";
$rst=mysqli_query($conn,$apunteak);
$row = mysqli_fetch_array($rst);
echo '<script language="javascript">alert("Gogoratu apuntearen jabea ez bazara aldaketak ez direla gordeko.");</script>';
?>

<!DOCTYPE html>
<html lang="es">
    
    <?php require "partials/head.php";?>

  <body>
    <header>
      <div class="cover d-flex justify-content-center align-items-center flex-column p-5">
        <h1 style="font-family:cambria"> Apuntea aldatu </h1>
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
      <form action="apunteaAldaketaEgin.php" method="POST" >
        <br>
        <input name="id" type="hidden" id="id" <?php echo" value='{$id}'";?>/>
        <div class="form-row">
          <div class="form-group col-md-6">
            <br />
            <label>Gradua</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Gradua']}' name='gradua'/>
            ";?>
          </div>
          <div class="form-group col-md-6">
            <br />
            <label>Kurtsoa</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Kurtsoa']}' name='kurtsoa'/>
            ";?>
          </div>
        </div>
        <div>
            <label>Irakasgaia</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Irakasgaia']}' name='irakasgaia'/>
            ";?>
            
        </div>
        <br>
        <div>
            <label>Egilea</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['ErabLDAP']}' name='erabLDAP'/>
            ";?>
        </div>
        <br>
        <div>
          <label>Link</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$row['Fitxategia']}' name='fitxategia'/>
            ";?>
        </div>
        <br>
        <!-- Aldatzeko/atzera joateko botoiak -->
        <a class="btn btn-outline-success" type="button" href="index.php"> Deuseztatu </a>         
        <input class="btn btn-outline-danger" type="submit" value="Aldatu" />
   
      </form>
    </div>

    <?php require 'partials/footer.php' ?>
    
  </body>
</html>
