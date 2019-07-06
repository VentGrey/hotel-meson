<!DOCTYPE html>

<html>

<head>

</head>

       <body>

             <php>
                <?php $nombre = $_POST['nombre']; echo$nombre; ?>
                <?php $apellidos = $_POST['apellido']; echo$apellidos; ?>
                <?php $telefono = $_POST['phone']; echo$telefono; ?>
                <?php $mail = $_POST['mail']; echo$mail; ?>

                <?php $no_kids = $_POST['no-kids']; echo$no_kids; ?>
                <?php $no_adults = $_POST['no-adults']; echo$no_adults; ?>
                <?php $date_checkin = $_POST['check-in']; echo$date_checkin; ?>
                <?php $date_checkout = $_POST['check-out']; echo$date_checkout; ?>
             </php>

       </body>

</html>
