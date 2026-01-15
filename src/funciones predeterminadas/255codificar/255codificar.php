<?php
$c = $_POST['cadena']; $d = $_POST['desp'];
echo "Original: $c <br>";
$res = "";
for($i=0; $i<strlen($c); $i++) {
    $char = $c[$i];
    $code = ord($char);
    // Simple implementacion para mayusculas
    if ($code >= 65 && $code <= 90) {
        $code += $d;
        while($code > 90) $code -= 26;
        $res .= chr($code);
    } else {
        $res .= $char;
    }
}
echo "Cifrado: $res";
?>