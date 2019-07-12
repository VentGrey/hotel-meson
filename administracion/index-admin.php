<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>pricechanger</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div>
      <nav class="navbar navbar-light navbar-expand-md shadow-sm d-flex justify-content-xl-center align-items-xl-center bounce animated navigation-clean" style="background-color: #380000;">
        <div class="container">
          <a class="navbar-brand text-center shadow-sm d-xl-flex" href="#" style="font-family: Montserrat, sans-serif;color: #FAFAFA;">MESÓN DE JUAN VALLE</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto"></ul>
          </div>
        </div>
      </nav>
    </div>

    <h1 class="display-3 text-lowercase text-center">Cambiar Precios de las habitaciones.</h1>

    <div class="container">
        <form action="process1.php" method="POST" id="sroom">
            <label>Seleccione que habitación desea cambiar:</label>
            <select name="id">
                <option value="" selected>Seleccione el tipo de habitacion</option>
                <option value="1" >Hab. Sencilla</option>
                <option value="2">Hab. Doble</option>
                <option value="3">Hab. Triple</option>
                <option value="4">Hab. Cuádruple</option>
            </select>
            <br><label>Ingrese el precio de la habitacion</label>
            <input type="number" name="price" id="price"/>
            <input type="submit" id="btn" value="Aceptar" />
        </form>
    </div>
    <hr>
    <h2 class="display-3 text-center">Solicitud urgente</h2>
    <h5 class="display-5 text-center">Escriba la fecha de inicio y fin de la sobreescritura de precios</h5>
    <div class="container">
        <form action="SendMail.php">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Fechas de inicio / fin</span>
                </div>
                <input type="date" aria-label="Checkin" class="form-control">
                <input type="date" aria-label="Checkout" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">Escriba las habitaciones y los precios que desee</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <input class="btn btn-info" type="submit" id="btn-solicitud" value="Solicitar Cambio de Precios">
        </form>
    </div>
    <!--Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
