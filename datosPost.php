<?php
  $nombre = $_POST['nombre']; echo$nombre;
  $segundo = $_POST['segundo']; echo$segundo;
  $apellidos = $_POST['apellido']; echo$apellidos;
  $telefono = $_POST['phone']; echo$telefono;
  $mail = $_POST['mail']; echo$mail;
  $direccion = $_POST['address']; echo$direccion;
  $no_kids = $_POST['no-kids']; echo$no_kids;
  $no_adults = $_POST['no-adults']; echo$no_adults;
  $check_date = date('j\/F\/Y H:i:s');
  $date_checkin = $_POST['check-in']; echo$date_checkin;
  $date_checkout = $_POST['check-out']; echo$date_checkout;

  $staff = 1;

  //Database.
  $database = new SQLite3('db.sqlite3');

  //Insertar información del Cliente.
  if(isset($nombre)) {
    $database->exec("INSERT INTO main_customer(customer_id, first_name,
                    middle_name, last_name, contact_no, address, email_address)
                    VALUES('$nombre', '$segundo', '$apellidos', '$telefono',
                    '$direccion', '$mail')");
  }
  //Insertar detalles de la reservación.
  $database->exec("INSERT INTO main_reservation(no_of_children, no_of_adults,
                  reservation_date_time, expected_arrival_date_time,
                  expected_departure_date_time, customer_id, staff_id)
                  VALUES('$no_kids', '$no_adults', '$check_date',
                  '$date_checkin', '$date_checkout', '$', '$staff')");

?>
