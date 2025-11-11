<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de alturas</title>
</head>
<body>
    <h1>Ingrese el nombre y la altura (en centímetros) de 5 personas:</h1>
    <form action="ejercicio6.php" method="get">

    <?php 
        for ($i = 1; $i <= 5; $i++) {
            echo "<p><label for='name$i'>Nombre: </label> <input type='text' name='name$i' id='name$i' required></p>";
            echo "<p><label for='height$i'>Altura: </label> <input type='number' name='height$i' id='height$i' required</p>";
        }
    ?>
        <input type="submit" value="enviar">
        
    </form>
</body>
</html>