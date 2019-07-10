<?php
$db = new SQLite3('../backend/db.sqlite3');
/*
  Consulta para ver las tablas de la base de datos xD // Inspirado en mi generador de codigo :v
  $results = $db->query('SELECT * FROM sqlite_master WHERE type = "table"');
  while ($row = $results->fetchArray()) {
     echo $row [1]."<br />";
}*/
$var=0; //Contaremos 4//
$cadena="";
$cadena = "[";
$results = $db->query('SELECT * FROM main_roomtype');
while ($row = $results->fetchArray()) {
  $var++;
  if($var==4){
    $cadena = $cadena.'{';
    $cadena = $cadena.'"precio":"';
    $cadena = $cadena.$row["price"];
    $cadena = $cadena.'"}';
  }else{
    $cadena = $cadena.'{';
    $cadena = $cadena.'"precio":"';
    $cadena = $cadena.$row["price"];
    $cadena = $cadena.'"},';
  }
}
$cadena = $cadena."]";
echo $cadena;

?>
