<?php
$nums = explode(" ", $_POST['nums']);
$pares = [];
foreach($nums as $n) {
    if ($n % 2 == 0) $pares[] = $n;
}
echo "Los " . count($pares) . " numeros pares son: " . implode(" ", $pares);
?>