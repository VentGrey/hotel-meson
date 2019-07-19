<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="imagen" href="images/icono-1.ico">
  <title>Hotel Mesón - reservar</title>
  <!-- Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Bad+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Page styles -->
  <link href="css/style-reservar.css" rel="stylesheet">
   <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script src="js/precios.js"></script>
</head>

<body>

  <!--Navbar-->
  <div class="navbar">
    <ul class="navbar-list">
      <li class="navbar-item"><a class="navbar-link" href="index.php">Volver a página principal</a></li>
      <li class="navbar-item"><a class="navbar-link-cel" href="index.php">Volver</a></li>
    </ul>
  </div>
  <!--/.Navbar-->

  <!--Help Container-->
  <div class="help-container"></div>
  <!--/.Help Container-->

  <!--Type Rooms-->
  <div class="container-rooms">

    <!--Habitación Sencilla-->
    <div class="rooms-general" id="hab-sencilla">
      <div class="room-info info-img">
        <a href="#imghs"><img src="images/imagen-hs-1.jpeg" alt="Habitación Sencilla" class="room-img"></a>
      </div>
      <div class="room-info info-main">
        <div class="first-part-info">
          <span class="ir_page-title">Habitación Sencilla</span>
          <!--<span class="ir_page-text"><span id="clicks-ava-hs">11</span> habitaciones disponibles</span>-->
          <ul class="main-list">
            <li class="main-item">Tamaño: 14 - 17 mts.</li>
            <li class="main-item">Camas: 1 cama matrimonial</li>
            <li class="main-item">Máximo: 2 personas</li>
          </ul>
        </div>
        <div class="second-part-info">
          <ul class="services-list">
            <li class="services-item"><i class="fas fa-parking" title="Estacionamiento"></i></li>
            <li class="services-item"><i class="fas fa-wifi" title="Wi-Fi"></i></li>
            <li class="services-item"><i class="fas fa-tv" title="T.V."></i></li>
            <li class="services-item"><i class="fas fa-heart" title="Servicio de limpieza"></i></li>
          </ul>
        </div>
      </div>
      <div class="room-info info-price">
        <div class="part-price">
            <!-- Price Should go here -->
        </div>
        <div class="part-add">
            <div class="add">
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="imghs">
      <div class="imagen">
        <div onclick="atrashs();">&#60;</div>
        <a href=""><img src="images/imagen-hs-1.jpeg" id="imagenhs"></a>
        <div href="" onclick="adelantehs();">></div>
      </div>
      <a class="cerrar" href="#hab-sencilla">x</a>
    </div>
    <!--/.Hab Sencilla-->

    <!--Habitación Doble-->
    <div class="rooms-general" id="hab-doble">
      <div class="room-info info-img">
        <a href="#imghd"><img src="images/imagen-hd-1.jpeg" alt="Habitación Doble" class="room-img"></a>
      </div>
      <div class="room-info info-main">
        <div class="first-part-info">
          <span class="ir_page-title">Habitación Doble</span>
          <!--<span class="ir_page-text"><span id="clicks-ava-hd">10</span> habitaciones disponibles</span>-->
          <ul class="main-list">
            <li class="main-item">Tamaño: 18 - 21 mts.</li>
            <li class="main-item">Camas: 2 camas matrimoniales</li>
            <li class="main-item">Máximo: 4 personas</li>
          </ul>
        </div>
        <div class="second-part-info">
          <ul class="services-list">
            <li class="services-item"><i class="fas fa-parking" title="Estacionamiento"></i></li>
            <li class="services-item"><i class="fas fa-wifi" title="Wi-Fi"></i></li>
            <li class="services-item"><i class="fas fa-tv" title="T.V."></i></li>
            <li class="services-item"><i class="fas fa-heart" title="Servicio de limpieza"></i></li>
          </ul>
        </div>
      </div>
      <div class="room-info info-price">
        <div class="part-price">
            <!-- Price should go here -->
        </div>
        <div class="part-add">
          <div class="add">
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="imghd">
      <div class="imagen">
        <div onclick="atrashd();">&#60;</div>
        <a href=""><img src="images/imagen-hd-1.jpeg" id="imagenhd"></a>
        <div onclick="adelantehd();">></div>
      </div>
      <a class="cerrar" href="#hab-doble">x</a>
    </div>
    <!--/.Hab Doble-->

    <!--Habitación Triple-->
    <div class="rooms-general" id="hab-triple">
      <div class="room-info info-img">
        <a href="#imght"><img src="images/imagen-ht-1.jpeg" alt="Habitación Triple" class="room-img"></a>
      </div>
      <div class="room-info info-main">
        <div class="first-part-info">
          <span class="ir_page-title">Habitación Triple</span>
          <!--<span class="ir_page-text"><span id="clicks-ava-ht">5</span> habitaciones disponibles</span>-->
          <ul class="main-list">
            <li class="main-item">Tamaño: 18 - 21 mts.</li>
            <li class="main-item">Camas: 3 camas matrimoniales</li>
            <li class="main-item">Máximo: 6 personas</li>
          </ul>
        </div>
        <div class="second-part-info">
          <ul class="services-list">
            <li class="services-item"><i class="fas fa-parking" title="Estacionamiento"></i></li>
            <li class="services-item"><i class="fas fa-wifi" title="Wi-Fi"></i></li>
            <li class="services-item"><i class="fas fa-tv" title="T.V."></i></li>
            <li class="services-item"><i class="fas fa-heart" title="Servicio de limpieza"></i></li>
          </ul>
        </div>
      </div>
      <div class="room-info info-price">
        <div class="part-price">
            <!-- Price should go here -->
        </div>
        <div class="part-add">
          <div class="add">
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="imght">
      <div class="imagen">
        <div onclick="atrasht();">&#60;</div>
        <a href=""><img src="images/imagen-ht-1.jpeg" id="imagenht"></a>
        <div onclick="adelanteht();">></div>
      </div>
      <a class="cerrar" href="#hab-triple">x</a>
    </div>
    <!--/.Hab Triple-->

    <!--Habitación Cuádruple-->
    <div class="rooms-general" id="hab-cuadruple">
      <div class="room-info info-img">
        <a href="#imghc"><img src="images/imagen-hc-1.jpeg" alt="Habitación Cuádruple" class="room-img"></a>
      </div>
      <div class="room-info info-main">
        <div class="first-part-info">
          <span class="ir_page-title">Habitación Cuádruple</span>
          <!--<span class="ir_page-text"><span id="clicks-ava-hc">1</span> habitación disponible</span>-->
          <ul class="main-list">
            <li class="main-item">Tamaño: 20 - 25 mts.</li>
            <li class="main-item">Camas: 4 camas matrimoniales</li>
            <li class="main-item">Máximo: 8 personas</li>
          </ul>
        </div>
        <div class="second-part-info">
          <ul class="services-list">
            <li class="services-item"><i class="fas fa-parking" title="Estacionamiento"></i></li>
            <li class="services-item"><i class="fas fa-wifi" title="Wi-Fi"></i></li>
            <li class="services-item"><i class="fas fa-tv" title="T.V."></i></li>
            <li class="services-item"><i class="fas fa-heart" title="Servicio de limpieza"></i></li>
          </ul>
        </div>
      </div>
      <div class="room-info info-price">
        <div class="part-price">
            <!-- Price should go here -->
        </div>
        <div class="part-add">
          <div class="add">
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="imghc">
      <div class="imagen">
        <div onclick="atrashc();">&#60;</div>
        <a href=""><img src="images/imagen-hc-1.jpeg" id="imagenhc"></a>
        <div onclick="adelantehc();">></div>
      </div>
      <a class="cerrar" href="#hab-cuadruple">x</a>
    </div>
    <!--/.Hab Cuádruple-->

    <!--Counter-->
    <form name="f1" action="CreateCharge.php" method="post" id="payment-form" class="form-number">

      <span>Elija el número de habitaciones que desea reservar por cada habitación.</span>

      <div class="box-number">
        <label for="num-habsen" class="number-label">Habitación Sencilla</label>
        <input type="number" min="0" max="11" name="num-habsen" class="number-input">

        <label for="num-habdob" class="number-label">Habitación Doble</label>
        <input type="number" min="0" max="10" name="num-habdob" class="number-input">

        <label for="num-habtri" class="number-label">Habitación Triple</label>
        <input type="number" min="0" max="5" name="num-habtri" class="number-input">

        <label for="num-habcua" class="number-label">Habitación Cuádruple</label>
        <input type="number" min="0" max="1" name="num-habcua" class="number-input">

        <label for="check-in" class="number-label">Check in</label>
        <input type="date" name="check-in" class="check-date">

        <label for="check-out" class="number-label">Check out</label>
        <input type="date" name="check-out" class="check-date">
      </div>

      <div class="container-card">
        <div class="box-card">
          <label for="card-element" class="card-label">Tarjeta de crédito o débito</label>
          <div id="card-element" class="card-element">

          </div>
        </div>

        <div class="box-card">
          <label for="correo" class="card-label">Correo para recibir recibo de compra</label>
          <div class="card-element">
            <input type="email" name="correo" class="card-input" placeholder="Escriba un correo para recibo de compra">
          </div>
        </div>

        <input type="submit" name="" value="Submit Payment" class="pagar-btn">
      </div>

    </form>
    <!--/.Counter-->

  </div>
  <!--/.Type Rooms-->

  <!--Messenger bubble-->
  <a href="#">
    <div class="back_msng-bubble">
      <span class="title_msng-bubble">chat</span>
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
  <!--<script src="js/counter.js"></script>-->
  <script src="js/galeria.js"></script>
  <script src="https://js.stripe.com/v3/"></script>

  <!-- Warning GIANT SCRIPT INCOMING -->
  <script>
   // Create a Stripe client.
   var stripe = Stripe('pk_test_EOOe03pe9QkDpgqj3tvpW7W900fVy7pNgo');

   // Create an instance of Elements.
   var elements = stripe.elements();

   // Custom styling can be passed to options when creating an Element.
   // (Note that this demo uses a wider set of styles than the guide below.)
   var style = {
       base: {
           color: '#32325d',
           fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
           fontSmoothing: 'antialiased',
           fontSize: '16px',
           '::placeholder': {
               color: '#aab7c4'
           }
       },
       invalid: {
           color: '#fa755a',
           iconColor: '#fa755a'
       }
   };

   // Create an instance of the card Element.
   var card = elements.create('card', {style: style});

   // Add an instance of the card Element into the `card-element` <div>.
   card.mount('#card-element');

   // Handle real-time validation errors from the card Element.
   card.addEventListener('change', function(event) {
       var displayError = document.getElementById('card-errors');
       if (event.error) {
           displayError.textContent = event.error.message;
       } else {
           displayError.textContent = '';
       }
   });

   // Handle form submission.
   var form = document.getElementById('payment-form');
   form.addEventListener('submit', function(event) {
       event.preventDefault();

       stripe.createToken(card).then(function(result) {
           if (result.error) {
               // Inform the user if there was an error.
               var errorElement = document.getElementById('card-errors');
               errorElement.textContent = result.error.message;
           } else {
               // Send the token to your server.
               stripeTokenHandler(result.token);
           }
       });
   });

   // Submit the form with the token ID.
   function stripeTokenHandler(token) {
       // Insert the token ID into the form so it gets submitted to the server
       var form = document.getElementById('payment-form');
       var hiddenInput = document.createElement('input');
       hiddenInput.setAttribute('type', 'hidden');
       hiddenInput.setAttribute('name', 'stripeToken');
       hiddenInput.setAttribute('value', token.id);
       form.appendChild(hiddenInput);
       // Submit the form
       form.submit();
   }
  </script>
</body>

</html>
