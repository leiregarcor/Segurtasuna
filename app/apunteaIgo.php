<?php
require "DBKonexioa.php";

session_start();

$LDAP= $_SESSION['LDAP']; #uneko erabiltzailearen LDAP ( orain apunteak igoko dituena)

$irakasgaia= $_POST['irakasgaia'];
$gradua= $_POST['gradua'];
$kurtsoa= $_POST['kurtsoa'];
$fitx= $_POST['fitx'];

//INSERT INTO `Apunte`(`Id`, `IgotzeData`, `Irakasgaia`, `Gradua`, `Kurtsoa`, `Fitxategia`, `ErabLDAP`) VALUES (NULL,CURDATE(),'LKSA','Ingenieritza informatikoa','2','link','961005')
$apunteak = "INSERT INTO `Apunte` VALUES (NULL, CURDATE(),'$irakasgaia','$gradua','$kurtsoa','$fitx','$LDAP')";
$rst=mysqli_query($conn,$apunteak);

if($rst){
    header("Location: http://localhost:81/index.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="es">
    
    <?php require "partials/head.php";?>

  <body>
    <header>
      <div class="cover d-flex justify-content-center align-items-center flex-column p-5">
        <h1 style="font-family:cambria">Apunte berriaren datuak sartu </h1>
      </div>
    </header>

  <body>
    <div class=" d-flex justify-content-center align-items-center">
      <form action="apunteaIgo.php" method="POST" >
        <br>
        <div class="form-row">
          <div class="form-group col-md-6">
            <br />
            <label>Gradua</label>
            <select name="gradua" class="form-control">
                <option selected>Ingenieritza informatikoa</option>
                <option>Ingenieritza Mekanikoa</option>
                <option>Ingenieritza Elektronikoa</option>
                <option>Ingenieritza Industriala</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <br />
            <label>Kurtsoa</label>
            <input type='text' name="kurtsoa" class='form-control' placeholder="3" required/>
          </div>
        </div>
        <div>
            <label>Irakasgaia</label>
            <input type='text' name="irakasgaia" class='form-control' placeholder="SEO" required/>             
        </div>
        <br>
        <div>
            <label>Egilea</label>
            <?php echo"
                <input type='text' class='form-control'  value='{$LDAP}' readonly/>
            ";?>
        </div>
        <br>
        <div>
            <label>Link</label>            
            <input type='text' class='form-control' name="fitx" placeholder="www.google.com" required/>    
        </div>
        <br>
        <!-- Gordetzeko/atzera joateko botoiak -->
        <input class="btn btn-outline-success" type="submit" value="Gorde" />
        <a class="btn btn-outline-danger" type="button" href="index.php"> Atzera </a>  

      </form>
    </div>

    <?php require 'partials/footer.php' ?>
  </body>
</html>

