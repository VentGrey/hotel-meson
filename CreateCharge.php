<?php

require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_UqbYcqyb1MhZbYxq8XvuXn7h00imeKMLGE');

$token = $_POST["stripeToken"];


$charge = \Stripe\Charge::create([
    "amount" => 1200,
    "currency" => "mxn",
    "description" => "Pago en mi tienda...",
    "source" => $token
]);

echo "<pre>", print_r($charge), "</pre>";
?>
