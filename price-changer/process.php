<?php
// Get values from login form in login.php file
$username = $_POST['user'];
$password = $_POST['password'];

// Prevent SQLInyection
if (isset($username) && isset($password)) {
    $username = SQLite3::escapeString($username);
    $password = SQLite3::escapeString($password);
} else {
    echo "Ocurrió un error y no se procesaron las variables correctamente";
}
// Conectarse a la BD
$db = new SQLite3('login.sqlite3');

$result = $db -> query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

$row = $result -> fetchArray();

if ($row['username'] == $username && $row['password'] == $password) {
    if($row['username'] == "admin"){
        header("Location: index-admin.php");
    } else if($row['username'] == "recepcion"){
        header("Location: index-recepcion.php");
    } else {
        header("Location: failed.php");
    }
}
?>
