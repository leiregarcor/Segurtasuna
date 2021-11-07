<?php
  #sesioa amaitu nahi dugunean, aplikaziotik irten eta login orrira bidaliko du erabiltzailea
  session_start();
  session_unset();
  session_destroy();
  header('Location: /login.php')
  ?>
