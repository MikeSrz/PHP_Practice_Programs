<?php
function esPalindromo($s) {
    $s = strtolower(str_replace(' ', '', $s));
    return $s == strrev($s);
}
$f = $_POST['frase'] ?? 'ligar es ser agil';
if (esPalindromo($f)) echo 'Es palindromo'; else echo 'No lo es';
?>