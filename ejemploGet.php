<!DOCTYPE html>

<html>

<head>

<title>Ejemplo aprenderaprogramar.com</title>

</head>

       <body>

              <form name="formulario" method="get" action="ejemploGet.php">

              Nombre: <input type="text" name="nombre" value="">
              Apellidos: <input type="text" name="apellidos" value="">
              Teléfono: <input type="tel" name="phone" value="">
              E-Mail: <input type="mail" name="mail" value="">

              <input type="submit"/>

             </form>
             
             <php>
                <?php $nombre = $_GET['nombre']; echo$nombre; ?>
                <?php $apellidos = $_GET['apellidos']; echo$apellidos; ?>
                <?php $telefono = $_GET['phone']; echo$telefono; ?>
                <?php $mail = $_GET['mail']; echo$mail; ?>
             </php>

       </body>

</html>