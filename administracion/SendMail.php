<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$body = $_POST['message'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp-relay.gmail.com;smtp.gmail.com;aspmx.l.google.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'ambotics19@gmail.com';                     // SMTP username
    $mail->Password   = 'Ambotics2019';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ambotics19@gmail.com', 'Mailer');
    $mail->addAddress('ambotics19@gmail.com');               // Name is optional

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CAMBIO DE PRECIOS URGENTE';
    $mail->Body    = $body;
    $mail->Body    = $checkin;
    $mail->Body    = $checkout;

    $mail->send();
    echo 'Se envió el mensaje';
} catch (Exception $e) {
    echo "Error al enviar mensaje el servidor no está listo. Mailer Error: {$mail->ErrorInfo}";
}

?>
