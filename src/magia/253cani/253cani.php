<?php
function cani($s) {
    $res = "";
    for($i=0; $i<strlen($s); $i++) {
        $res .= ($i%2==0) ? strtoupper($s[$i]) : strtolower($s[$i]);
    }
    return $res;
}
echo cani($_POST['frase'] ?? 'Escribe una funcion');
?>