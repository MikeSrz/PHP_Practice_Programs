<?php
function generarLetra() {
    $min = (rand(0,1)==0);
    $code = $min ? rand(97, 122) : rand(65, 90);
    return chr($code);
}
echo generarLetra();
?>