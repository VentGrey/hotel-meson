<?php


require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_UqbYcqyb1MhZbYxq8XvuXn7h00imeKMLGE');
//Hacemos todo el proceso para sacar el total//
//BD que servirá para manejar operaciones con los precios reales.
$forPrDB = new SQLite3('backend/db.sqlite3');
//Variables a las que se le asignarán los precios.
$precio_habsen; //Variable para el precio de la Sencilla.
$precio_habdob; //Variable para el precio de la Doble.
$precio_habtri; //Variable para el precio de la Triple.
$precio_habcua; //Variable para el precio de la Cuádruple.
//Consulta para agarrar los datos de la tabla de precios.
$statement = $forPrDB->query("SELECT * FROM main_roomtype");
while($row = $statement->fetchArray()) { //While para cada fila de tabla.
  $row = (object) $row;
  if($row->id == 1) { //If para habitación Sencilla.
    $precio_habsen = $row->price; //Asignando el precio sencillo.
  }
  elseif($row->id == 2) { //If para habitación Doble.
    $precio_habdob = $row->price; //Asignando el precio Doble.
  }
  elseif($row->id == 3) { //If para habitación Triple.
    $precio_habtri = $row->price; //Asignando el precio Triple.
  }
  else { //Else que servirá para habitación Cuádruple.
    $precio_habcua = $row->price; //Asignando el precio Cuádruple.
  }
}

$num_habsen = $_POST['num-habsen'];
$num_habdob = $_POST['num-habdob'];
$num_habtri = $_POST['num-habtri'];
$num_habcua = $_POST['num-habcua'];
$num_dias = $_POST['num-dias'];

$total = $num_dias * (($precio_habsen*$num_habsen)+($precio_habdob*$num_habdob)+($precio_habtri*$num_habtri)+($precio_habcua*$num_habcua));
$total = ($total*100);




$token = $_POST["stripeToken"];
$precio_total = $total;

$charge = \Stripe\Charge::create([
    "amount" => $precio_total,
    "currency" => "mxn",
    "description" => "Pago en mi tienda...",
    "source" => $token
]);

echo "<pre>", print_r($charge), "</pre>";

?>
