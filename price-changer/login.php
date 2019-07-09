<!DOCTYPE html>
<html>
    <head>
        <title> Iniciar Sesión </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="frm">
            <form action="process.php" method="POST">
                <p>
                    <label>Usuario:</label>
                    <input type="text" id="user" name="user" />
                </p>
                <p>
                    <label>Contraseña:</label>
                    <input type="password" id="password" name="password" />
                </p>
                <p>
                    <input type="submit" id="btn" value="login" />
                </p>
            </form>
        </div>
    </body>
</html>
