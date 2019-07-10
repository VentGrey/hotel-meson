<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="imagen" href="images/icono-1.ico">
  <title>Hotel Mesón - formulario</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Page styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-form.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
</head>

<body>

  <!--Navbar-->
  <div class="navbar">
    <ul class="navbar-list">
      <li class="navbar-item"><a class="navbar-link" href="index-reservar.php">Volver a método de pago</a></li>
      <li class="navbar-item"><a class="navbar-link-cel" href="index-reservar.php">Volver</a></li>
    </ul>
  </div>
  <!--/.Navbar-->

  <!--Content-->
  <form action="datosPost.php" class="form" method="post">

    <div class="form-user">
      <span>Favor de revisar bien sus datos, ya que en dado caso de ser erróneos, no habrá reembolso.</span>

      <label for="name" class="label">Nombre</label>
      <input type="text" name="nombre" placeholder="Escriba su nombre" class="input">

      <label for="second" class="label">Segundo nombre</label>
      <input type="text" name="segundo" placeholder="Escriba su segundo nombre" class="input">

      <label for="lastname" class="label">Apellido</label>
      <input type="text" name="apellido" placeholder="Escriba sus apellidos" class="input">

      <label for="phone" class="label-half">No. de contacto</label>
      <input type="tel" name="phone" placeholder="Número de contacto" class="input-half">

    </div>

    <div class="form-details">
      <label for="no-kids">Número de niños</label>
      <input type="number" name="no-kids" min="0">

      <label for="no-adults">Número de adultos</label>
      <input type="number" name="no-adults" min="0">

      <label for="check-in">Check in</label>
      <input type="date" name="check-in" class="check-date">

      <label for="check-out">Check out</label>
      <input type="date" name="check-out" class="check-date">

      <input type="submit" value="Enviar" class="btn-form">
    </div>

  </form>

  <!--/.Content-->

  <!--Messenger bubble-->
  <a href="#">
    <div class="back_msng-bubble">
      <i class="fab fa-facebook-messenger msng-bubble"></i>
    </div>
  </a>
  <!--/.Messenger bubble-->

  <!--Redes Sociales-->
  <div class="box_redes">
    <a href="https://www.facebook.com/hotelmesondejuanvalle/" target="_blank">
      <i class="fab fa-facebook-f red-facebook"></i>
    </a>
    <a href="https://www.google.com/search?q=hotel+meson+juan+valle&client=firefox-b-e&biw=1366&bih=635&source=lnms&sa=X&ved=0ahUKEwjb-M7x84rjAhVba80KHS8xD_YQ_AUICygA" target="_blank">
      <i class="fab fa-google red-google"></i>
    </a>
  </div>
  <!--/.Redes sociales-->

  <!--Scripts-->
  <script src="js/form.js"></script>

</body>

</html>
