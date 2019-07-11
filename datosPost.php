<?php
  $nombre = $_POST['nombre'];
  $segundo = $_POST['segundo'];
  $apellidos = $_POST['apellido'];
  $telefono = $_POST['phone'];
  $no_kids = $_POST['no-kids'];
  $no_adults = $_POST['no-adults'];
  //$check_date = date('j\/F\/Y H:i:s');
  $date_checkin = $_POST['check-in'];
  $date_checkout = $_POST['check-out'];
<<<<<<< HEAD
  //Clean dates value.
  $chin = preg_replace('/[^0-9]/', '', $date_checkin);
  $chou = preg_replace('/[^0-9]/', '', $date_checkout);
=======
  //
>>>>>>> 1747246539ea3dfce16713a28ab59e223a8599c6

  //Database.
  $database = new SQLite3('administracion/login.sqlite3');
  //Checar las fechas.
  $query1 = $database->query('SELECT * FROM customers'); //Realizar Consulta.
  $flaChIn = 0; //Bandera para el Check_In.
  $flaChOu = 0; //Bandera para el Check_Out.
  while($row = $query1->fetchArray()) { //While para las fechas.
    $row = (object) $row;
    $stringu1 = $row->checkin; //Tomar valor de Check_In.
    $stringu2 = $row->checkout; //Tomar valor de Check_out.
    $stringu1 = preg_replace('/[^0-9]/', '', $stringu1); //Limpiar valor CI.
    $stringu2 = preg_replace('/[^0-9]/', '', $stringu2); //Limpiar valor CO.
    //IF's para controlar banderas.
    if(($chin >= ($stringu1-1)) && ($chin <= ($stringu2))) {
      $flaChIn += 1; //Aumentar bandera de Check_In.
    }
    if(($chou >= ($stringu1-1)) && ($chou <= ($stringu2))) {
      $flaChOu += 1; //Aumentar bandera de Check_Out.
    }
  }
  //IF's para checar que las fechas estén completamente disponibles.
  if(($flaChIn > 0) && ($flaChOu > 0)) {
    echo 'No se puede hospedar durante estos días puesto que ya está lleno :(';
  } elseif($flaChIn > 0) {
      echo '<script>alert("Fecha de llegada ocupada.");</script>';
      echo '<br>';
      echo '<script>alert("Le recomendamos llegar unos cuantos días después.");</script>';
  } elseif($flaChOu > 0) {
      echo '<script>alert("La fecha de salida está ocupada.");</script>';
      echo '<br>';
      echo '<script>alert("Nos apena decirlo, pero tendrá que recortar su estancia. unu");</script>';
  } else {
    //Insertar información del Cliente.
    if(isset($nombre)) {
      $database->exec("INSERT INTO customers(customer_id ,first_name,
                      second_name, last_name, phone_number, children,
                      adults, checkin, checkout)
                      VALUES(null, '$nombre', '$segundo', '$apellidos', '$telefono',
                      '$no_kids', '$no_adults', '$date_checkin',
                      '$date_checkout')");
      header("Location: pago-exitoso.php");
    }
  }

?>
