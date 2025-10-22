<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Prueba</title>
    </head>
    <body>
        <p><?php echo "Este texto se mostrará en la página web." ?></p>
        <p><?= "Este texto se mostrará en la página web." ?></p>
        <p><?php print("Este texto se mostrará en la página web.") ?></p>

        <?php
            $nombre = "Aitor";
            $nombreCompleto = "Aitor Medrano";
            $numero = 123;
            $numero2 = 456;
            $pi = 3.14;
            $suerte = true;
            $sinValor;

            echo $sinValor;
?>
    </body>
</html>