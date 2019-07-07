<!DOCTYPE html>
<html>
    <head>
        <title> Counter con input type="number" </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="frm">

            <form name="f1" action="<?=$_SERVER["PHP_SELF"]?>" method="post">
              <input type="number" min="0" max="11" name="num">
              <input type="submit" name="" value="Enviar">
            </form>

            <?php
            $num_hab = $_POST['num'];
            $precio = 1200;
            $total = $num_hab * $precio;
            echo$total;
            ?>
        </div>
    </body>
</html>
