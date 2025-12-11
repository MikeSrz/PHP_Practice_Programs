<?php
function fraseImpares($frase) {
    $res = "";
    for($i=0; $i<strlen($frase); $i++) {
        if ($i % 2 != 0) $res .= $frase[$i];
    }
    return $res;
}
$f = $_POST['frase'] ?? 'Hola Mundo';
echo "Original: $f <br> Impares: " . fraseImpares($f);
?>