<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Ejercicios</h1>
    <h2>Ejercicio1</h2>
   <?php 
        for ($i = 1; $i <= 100; $i++){
            echo "$i ";
        }
   ?>
    <h2>Ejercicio2</h2>
    <?php
        for ($i = 50; $i <= 100; $i++){
            echo "$i ";
        }
   ?>
    <h2>Ejercicio3</h2>
        <?php
        for ($i = -50; $i <= 0; $i++){
            echo "$i ";
            }
        ?>
    <h2>Ejercicio4</h2>
        <?php
            for ($i = 2; $i <= 100; $i+=2){
                echo "$i ";
            }
        ?>
    <h2>Ejericio5</h2>
        <div id="ejercio5">
            <form method="get">
                <p><label for="number">Ingresa un valor positivo: </label>
                <input type="number" name="number" id="number" min="0"></p>
                <p><input type="submit" value="enviar"></p>
            <?php  
                if(isset($_GET['number'])) {
                    $number = $_GET["number"];
                    echo "Este es el número ingresado: $number. => Lista :";
                    for ($i= 0; $i <= $number; $i++ ) {
                        echo "$i ";
                    }
                }
            ?>

        <h2>Ejercicio7</h2>
        <h3>Ingrese las notas de sus alumnos</h3>
           <p><label for="nombre1">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre1"></p>

           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre2"></p>
                
           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre3"></p>
            
           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre4"></p>
            
           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre5"></p>

           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre6"></p>

           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre7"></p>
                
           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre8"></p>

           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre9"></p>
                
           <p><label for="nombre">Ingresa el nombre: </label>
                <input type="nombre" name="nombre" id="nombre10"></p>
        </div>
        
        
        
        <h2>Ejercicio 3</h2>
         <form method="get">
                <p><label for="number">Ingresa un valor positivo: </label>
                <input type="number" name="myNumber" id="number" min="0"></p>
                <p><input type="submit" value="enviar"></p>
        <?php
            $counter = 0;
            $number = $_GET['myNumber'];
            while ($number <= 10) {
                $number = $number/10;
                $count +=1;
            }
            $counter+=1;
            echo "El número tiene $counter cifras"
        ?>

</body>
</html>