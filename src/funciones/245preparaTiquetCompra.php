<?php
    require_once "243biblioteca.php";
    $nombre=$_GET['nombre'];
    $cantidad=(int)$_GET['cantidad'];
    $precio=(float)$_GET['precio'];
    $ticket = añadirProducto($nombre, $precio, $cantidad);
    echo "<table border=1px>
            <thead>
                <th>producto</th>
                    <th>PrEur</th>
                    <th>prPeset</th>
                    <th>cantidad</th>
            </thead>";

    $totalEuros = 0;
    $totalPesetas = 0;
    foreach ($ticket as $producto => $precios){
        $cant = $precios[2];
        echo "<tr>
                <td>".htmlspecialchars($producto)."</td>
                <td>$precios[0]</td> 
                <td>$precios[1]</td>
                <td>$cant</td>
            </tr>";
            $totalEuros+=$precios[0];
            $totalPesetas+=$precios[1];
    }
    echo "<tr>
            <td>TOTAL</td>
            <td>$totalEuros</td>
            <td>$totalPesetas</td>

        </tr>";
    echo "</table>";
?>