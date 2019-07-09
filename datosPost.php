<?php
  $nombre = $_POST['nombre'];
  $segundo = $_POST['segundo'];
  $apellidos = $_POST['apellido'];
  $telefono = $_POST['phone'];
  $mail = $_POST['mail'];
  $no_kids = $_POST['no-kids'];
  $no_adults = $_POST['no-adults'];
  $check_date = date('j\/F\/Y H:i:s');
  $date_checkin = $_POST['check-in'];
  $date_checkout = $_POST['check-out'];

  //Database.
  $database = new SQLite3('administracion/login.sqlite3');

  //Insertar información del Cliente.
  if(isset($nombre)) {
    $database->exec("INSERT INTO customers(first_name,
                    second_name, last_name, phone_number, mail, children,
                    adults, checkin, checkout)
                    VALUES('$nombre', '$segundo', '$apellidos', '$telefono',
                    '$mail', '$no_kids', '$no_adults', '$date_checkin',
                    '$date_checkout')");
  }

?>
