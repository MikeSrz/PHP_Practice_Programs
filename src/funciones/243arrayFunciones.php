<?php
    require_once '243biblioteca.php';

    $funciones = ["suma","resta","multiplica","dividir"];
    $numero1 = (int)$_GET['num1'];
    $numero2 = (int)$_GET['num2'];
    foreach ($funciones as $func){
        echo "".$func($numero1,$numero2);
        echo "<br>";
    }
?>