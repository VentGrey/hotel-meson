<?php
// Prevent SQLInyection
$id;
$price;

if (isset($_POST['id']) && isset($_POST['price'])) {
     $id = $_POST['id'];
     $price = $_POST['price'];
  $id = SQLite3::escapeString($id);
    $price = SQLite3::escapeString($price);
} else {
    echo "Ocurrió un error y no se procesaron las variables correctamente";
}
// Conectarse a la BD
$db = new SQLite3('login.sqlite3');

$sql = "UPDATE main_roomtype SET price = '$price',  WHERE id='$id' ";

$ret = $db->exec($sql);
   if(!$ret) {
      echo "Error en la consulta";
   } else {
      echo "Actualizacon correcta";
   }
?>
