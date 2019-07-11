<?php

  $nombre = $_POST['name'];
  $correo = $_POST['email'];
  $mensaje = $_POST['message'];

  $junto = "Nombre del cliente: $nombre<br><br>Correo del cliente: $correo<br><br>Mensaje: $mensaje";

  mail("reservacionesjuanvalle@gmail.com", "Mensaje desde la Página Web", $junto);

  header("Location: index.php");
?>
