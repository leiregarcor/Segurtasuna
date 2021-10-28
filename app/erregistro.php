<?php
  $host = $_SERVER['HTTP_HOST'];
  include ("DBKonexioa.php");
  if($conn){
    $erabiltzaile= $_POST['LDAP'];
    $pass= $_POST['pasahitza'];
    $izena= $_POST['izena'];
    $abizena= $_POST['abizena'];
    $nan= $_POST['NAN'];
    $telef= $_POST['telefono'];
    $mail= $_POST['mail'];
    $data= $_POST['date'];
    $gradua= $_POST['gradua'];

    $sql="INSERT INTO Erabiltzaile VALUES ('$erabiltzaile', '$pass', '$izena', '$abizena', '$nan', '$telef', '$mail', '$data', '$gradua')";
    $query = mysqli_query($conn, $sql);
    if($query){
      header("Location: http://localhost:81/login.php");
      exit;
    }
  }

?>

<!DOCTYPE html>
<html lang="es">
  <?php require "partials/head2.php";?> 
  <body>
    <script>
      function nan(dni) {
    var zenbaki
    var letr
    var letra
    var expresio_erregularra
   
    expresio_erregularra = /^\d{8}[a-zA-Z]$/;
   
    if(expresio_erregularra.test (dni) == true){
        zenbaki = dni.substr(0,dni.length-1);
       letr = dni.substr(dni.length-1,1);
       zenbaki = zenbaki % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(zenbaki,zenbaki+1);
      if (letra!=letr.toUpperCase()) {
         alert('NAN-a gaizki dago');
       }
    }else{
       alert('NAN-a gaizki dago, formatuak ez du balio');
    }
}

function email(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail)){
    } else {
        alert("Email-a gaizki jarri duzu.");
    }
}
function konprobaketa(dni, mail) {
    nan(dni);
    email(mail);
}
    </script>
    <?php require 'partials/header.php' ?>

    <div class=" d-flex justify-content-center align-items-center">
      <form action="erregistro.php" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <br />
            <label>LDAP</label>
            <input name="LDAP" type="text" class="form-control" placeholder="123456" />
          </div>
          <div class="form-group col-md-6">
            <br />
            <label>Pasahitza</label>
            <input name="pasahitza" type="password" class="form-control" placeholder="Pasahitza" />
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Izena</label>
            <input name="izena" type="text" class="form-control" placeholder="Leire" />
          </div>
          <div class="form-group col-md-6">
            <label>Abizena</label>
            <input name="abizena" type="text" class="form-control" placeholder="San José" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label>NAN</label>
            <input name="NAN" type="text" class="form-control" placeholder="11111111A" />
          </div>
          <div class="form-group col-md-6">
            <label>Telefono zenbakia</label>
            <input name="telefono" type="text" class="form-control" placeholder="987654321" />
          </div>
        </div>

        <div class="form-group ">
          <label>E-mail</label>
          <input
            name="mail" 
            type="text"
            class="form-control"
            placeholder="example@gmail.com"
          />
        </div>

        <div class="form-group ">
          <label class="control-label">Jaiotza data </label>
          <input
            class="form-control"
            name="date"
            placeholder="MM/DD/YYYY"
            type="date"
          />
        </div>

        <div class="form-group">
          <label>Gradua</label>
          <select name="gradua" class="form-control">
            <option selected>Ingenieritza informatikoa</option>
            <option>Ingenieritza Mekanikoa</option>
            <option>Ingenieritza Elektronikoa</option>
            <option>Ingenieritza Industriala</option>
          </select>
        </div>

        <input
          class="btn btn-outline-success"
          type="button"
          value="Konprobatu"
          onclick="konprobaketa($nan, $mail)"
        />
        <input type="submit" value="Submit bidaltzeko">
        <input class="btn btn-outline-danger" type="reset" value="Ezabatu" />
      </form>
    </div>

    <?php require 'partials/footer.php' ?>
    
  </body>
</html>