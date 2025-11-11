<?php
    $alturas;
    for ($i = 1;$i <= 5; $i++) {
        $alturas[$_GET["name$i"]] = $_GET["height$i"];
    }
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>Nombre</td>";
    echo "<td>Altura</td>";
    echo "<tr>";
    foreach ($alturas as $k => $v){
        echo"<tr>";
        echo "<td>Nombre: $k</td>";
        echo "<td>Altura: $v cm</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
