<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Hotel Mesón - formulario</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Bad+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
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
  <form action="" class="form" method="">
  
    <span>Favor de revisar bien sus datos, ya que en dado caso de ser erróneos, no habrá reembolso.</span>
   
    <label for="name">Nombre</label>
    <input type="text" id="name" name="name" placeholder="Escriba su nombre(s)" maxlength="20">
    
    <label for="lastname">Apellido</label>
    <input type="text" id="lastname" name="lastname" placeholder="Escriba sus apellidos" maxlength="30">
    
    <label for="phone">No. de contacto</label>
    <input type="tel" id="phone" name="phone" placeholder="Escriba un número de contacto">
    
    <label for="mail">Correo de contacto</label>
    <input type="email" id="mail" name="mail" placeholder="Escriba un e-mail de contacto">
    
    <input type="submit" value="Enviar" class="btn-form" onclick="enviar()">
    
    <span id="resultado">nombre</span>
    
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
    <a href="#">
      <i class="fab fa-facebook-f red-facebook"></i>
    </a>
    <a href="#">
      <i class="fab fa-instagram red-insta"></i>
    </a>
    <a href="#">
      <i class="fab fa-google red-google"></i>
    </a>
  </div>
  <!--/.Redes sociales-->

  <!--Scripts-->
  <script src="js/form.js"></script>
  
</body>

</html>