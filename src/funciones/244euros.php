<?php
require_once '243biblioteca.php';
$miDinero = 12;
echo "$miDinero<br>"; 
$pesetas = euroPeseta($miDinero);
echo "$pesetas <br>";
echo pesetaEuro($pesetas);
echo "<h1> Furula </h1>";
?>