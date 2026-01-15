<?php
$f = $_POST['frase'] ?? 'Murcielago';
$vocales = ['a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0];
$f = strtolower($f);
$total = 0;
for($i=0; $i<strlen($f); $i++) {
    if (isset($vocales[$f[$i]])) {
        $vocales[$f[$i]]++;
        $total++;
    }
}
print_r($vocales);
echo "<br>Total: $total";
?>