<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="imagen" href="images/icono-1.ico">
  <title>Hotel Mesón - error al reservar</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Page styles -->
  <link href="css/style-reservar.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <!--Navbar-->
  <div class="navbar">
    <ul class="navbar-list">
      <li class="navbar-item"><a class="navbar-link" href="index-form.php">Volver al formulario</a></li>
      <li class="navbar-item"><a class="navbar-link-cel" href="index-form.php">Volver</a></li>
    </ul>
  </div>
  <!--/.Navbar-->

</body>

</html>

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

  //Clean dates value.
  $chin = preg_replace('/[^0-9]/', '', $date_checkin);
  $chou = preg_replace('/[^0-9]/', '', $date_checkout);

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
  if(($flaChIn > 5) || ($flaChOu > 5)) {
    echo 'No se puede hospedar durante estos días puesto que ya está lleno :(';
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
