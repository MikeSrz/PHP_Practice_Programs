<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio7.php" method="GET">
   <?php
       for ($i = 1; $i <= 5; $i++) {
            echo "<p><label for ='name$i'>Nombre: </label><input type='text' name='name$i' id ='name$i' required></p>";
            echo "<p><label for ='height$i'>Altura: </label><input type='number' name='height$i' id ='height$i' required></p>";
            echo "<p><label for ='email$i'>Correo: </label><input type='email' name='email$i' id ='email$i' required></p>";
        }

   ?> 
   <input type="submit" value="enviar">
    </form>
</body>
</html>