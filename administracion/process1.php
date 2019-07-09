<?php
// Prevent SQLInyection
$id;
$price;

if (isset($_POST['id'], $_POST['price'])) {
    $id = $_POST['id'];
    $price = $_POST['price'];
    $id = SQLite3::escapeString($id);
    $price = SQLite3::escapeString($price);
    $db = new SQLite3('../backend/db.sqlite3');
    // Conectarse a la BD
    $sql = "UPDATE main_roomtype SET price = '$price'  WHERE id='$id' ";

    $ret = $db->exec($sql);
   if(!$ret) {
      echo "Error en la consulta";
   } else {
      echo "Datos actualizados correctamente. Puede cerrar esta ventana o regresar a editar los precios.";
   }
} else {
    echo "Ocurrió un error y no se procesaron las variables correctamente";
}

?>
