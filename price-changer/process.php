<?php
// Get values from login form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

// Prevent SQLInyection
if (isset($username) && isset($password)) {
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = sqlite_escape_string($username);
    $password = sqlite_escape_string($password);
} else {
    echo "Ocurrió un error y no se procesaron las variables correctamente";
}
// Conectarse a la BD
$db = new SQLite('../login');

$result = sqlite_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'")
        or die("Fallo al conectar con la base de datos".sqlite_error_string());

$row = sqlite_fetch_array($result);

if ($row['username'] == $username && $row['password'] == $password) {
    header("Location: index.php");
} else {
    echo "Fallo al iniciar sesión";
}
?>
