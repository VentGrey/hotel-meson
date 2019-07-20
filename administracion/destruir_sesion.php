<?php
  session_start(); //reactivamos la sesion//
  session_unset(); //destruimos las varaibles de sesion//
  session_destroy(); //destruimos la sesion//
  header('Location: login.php?mensaje=sesion_cerrada'); //volvemos al login//
?>
