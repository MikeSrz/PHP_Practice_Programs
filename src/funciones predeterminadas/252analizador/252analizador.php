<?php
$f = $_POST['frase'] ?? 'Hola mundo cruel';
// No usar str_word_count
$palabras = explode(" ", $f);
echo "Letras totales: " . strlen(str_replace(" ", "", $f)) . "<br>";
echo "Palabras: " . count($palabras) . "<br>";
foreach($palabras as $p) echo "$p : " . strlen($p) . "<br>";
?>