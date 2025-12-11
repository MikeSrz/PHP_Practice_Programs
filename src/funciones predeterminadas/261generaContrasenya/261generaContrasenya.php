<?php
function generarPass($tam) {
    $chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $res = '';
    for($i=0; $i<$tam; $i++) {
        $res .= $chars[rand(0, strlen($chars)-1)];
    }
    return $res;
}
echo generarPass($_GET['tam'] ?? 8);
?>