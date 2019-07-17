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
$num_dias; //Numero de dias//
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






if (isset($_POST['num-habsen'])){
  $num_habsen = $_POST['num-habsen'];
  if($num_habsen ==""){
    $num_habsen = 0;
  }else{}
}else{$num_habsen = 0;}

if(isset($_POST['num-habdob'])){
  $num_habdob = $_POST['num-habdob'];
  if($num_habdob ==""){
    $num_habdob = 0;
  }else{}
}else{$num_habdob = 0;}

if(isset($_POST['num-habtri'])){
  $num_habtri = $_POST['num-habtri'];
  if($num_habtri ==""){
    $num_habtri = 0;
  }else{}
}else{$num_habtri = 0;}

if(isset($_POST['num-habcua'])){
  $num_habcua = $_POST['num-habcua'];
  if($num_habcua ==""){
    $num_habcua = 0;
  }else{}
}else{$num_habcua = 0;}

if(isset($_POST['num-dias'])){
  $num_dias = $_POST['num-dias'];
  if($num_dias ==""){
    $num_dias = 0;
  }else{}
}else{$num_dias = 0;}
//Seccion para el correo
$correo="";
if(isset($_POST['correo'])){
  $correo = $_POST['correo'];
}else{/*No hacemos nada*/}

//echo gettype($num_habcua);

$total = $num_dias * (($precio_habsen*$num_habsen)+($precio_habdob*$num_habdob)+($precio_habtri*$num_habtri)+($precio_habcua*$num_habcua));
$total = ($total*100);
echo $total;


$token="";
if(isset($_POST["stripeToken"])){
  $token = $_POST["stripeToken"];
}else{}

$precio_total = $total;

$charge = \Stripe\Charge::create([
    'amount' => $precio_total,
    'currency' => 'mxn',
    'description' => 'Habitación(es) por noche.',
    'source' => $token,
    'receipt_email' => $correo

]);

header("Location: index-form.php");

?>
