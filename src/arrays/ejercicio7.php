<?php
    $personas = [];
    for ($i = 1; $i <= 5; $i++ )
    array_push($personas, ["nombre" => $_GET["name$i"], "altura" => $_GET["height$i"],"email" => $_GET["email$i"]]);

    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Altura</th><th>Mail</th></tr>";
    foreach($personas as $persona) {
        echo "<tr>";
        foreach ($persona as $k => $v) {
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>