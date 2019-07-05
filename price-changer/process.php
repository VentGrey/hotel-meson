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

$row = SQLite3Result::fetchArray($result);

if ($row['username'] == $username && $row['password'] == $password) {
    header("Location: index.php");
} else {
    echo "Fallo al iniciar sesión";
}
?>
