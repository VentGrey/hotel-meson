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

  //Database.
  $database = new SQLite3('administracion/login.sqlite3');
  /*//Checar las fechas.
  $query1 = $database->query('SELECT * FROM customers'); //Realizar Consulta.
  $flaChIn = 0; //Bandera para el Check_In.
  $flaChOu = 0; //Bandera para el Check_Out.
  while($row = $query1->fetchArray()) { //While para las fechas.
    $row = (object) $row;
    $stringu1 = $row->checkin; //Tomar valor de Check_In.
    $stringu2 = $row->checkout; //Tomar valor de Check_out.
    $stringu1 = preg_replace('/[^0-9]/', '', $stringu1); //Limpiar valor CI.
    $stringu2 = preg_replace('/[^0-9]/', '', $stringu2); //Limpiar valor CO.
    //echo $stringu1 . '<br>';
    //echo $stringu2 . '<br>';
    //IF's para controlar banderas.
    if(($date_checkin >= ($stringu1-1)) && ($date_checkin <= ($stringu2))) {
      $flaChIn += 1; //Aumentar bandera de Check_In.
    }
    if(($date_checkout >= ($stringu1-1)) && ($date_checkout <= ($stringu2))) {
      $flaChOu += 1; //Aumentar bandera de Check_Out.
    }
  }
  //IF's para checar que las fechas estén completamente disponibles.
  if(($flaChIn > 0) && ($flaChOu > 0)) {
    echo 'No se puede hospedar durante estos días puesto que ya está lleno :(';
  } elseif($flaChIn > 0) {
      echo 'Fecha de llegada ocupada.';
      echo '<br>';
      echo 'Le recomendamos llegar unos cuantos días después.';
  } elseif($flaChOu > 0) {
      echo 'La fecha de salida está ocupada.';
      echo '<br>';
      echo 'Nos apena decirlo, pero tendrá que recortar su estancia. unu';
  } elseif(($flaChIn < 1) && ($flaChOu < 1)) {*/
    //Insertar información del Cliente.
    if(isset($nombre)) {
      $database->exec("INSERT INTO customers(first_name,
                      second_name, last_name, phone_number, children,
                      adults, checkin, checkout)
                      VALUES('$nombre', '$segundo', '$apellidos', '$telefono',
                      '$no_kids', '$no_adults', '$date_checkin',
                      '$date_checkout')");
    }
  //}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="imagen" href="images/icono-1.ico">
  <title>Pago Exitoso</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
  <!-- Page styles -->
  <link href="css/style-pago.css" rel="stylesheet">
</head>

<body>

<!--Mensaje-->
<div class="container">
  <div class="message">
    <span>Gracias por reservar con nosotros</span>
    <span>Tu pago ha sido realizado con éxito :)</span>
  </div>
</div>
<!--/.Mensaje-->

</body>

</html>
