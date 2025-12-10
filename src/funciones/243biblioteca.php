<?php
declare(strict_types=1);
function suma(int $num1, int $num2 ){
    return $num1+$num2;
}
function resta(int $num1, int $num2) {
    return $num1-$num2;
}
function multiplica(int $num1, int $num2){
    return $num1*$num2;
}

function dividir(int $num1, int $num2){
    return (int)($num1 / $num2);
}

function euroPeseta(float $e, float $c = 166.386) {
    return (float)$e*$c;
}
function pesetaEuro(float $p, float $c=166.386) {
    return (float)$p/$c;
}

function añadirProducto(string $nombre, float $prec, int $cant){
     $totalEuros = $prec*$cant;
    $totalPesetas = euroPeseta($totalEuros);;
    return [$nombre => [$totalEuros, $totalPesetas, $cant]];
}

function mostrarTicket(array $ticket){
    echo "<table border=1px>
            <thead>
                <th>producto</th>
                <th>precio_Eur</th>
                <th>precio_Pes</th>
                <th>cantidad</th>
            </thead>";
    $totalEuros = 0;
    $totalPesetas = 0;
    foreach ($ticket as $producto){
        foreach ($producto as $nombre => $info){
            $precioEur = $info[0];
            $precioPes = $info[1];
            $cantidad = $info[2];
            echo "<tr>
                    <td>".htmlspecialchars($nombre)."</td>
                    <td>".number_format($precioEur,2)."</td> 
                    <td>".number_format($precioPes,2)."</td>
                    <td>$cantidad</td>
                </tr>";
                $totalEuros+=$info[0];
                $totalPesetas+=$info[1];
        }
    }
    echo "<tr>
            <td>TOTAL</td>
            <td>$totalEuros</td>
            <td>$totalPesetas</td>
         </tr>";
    echo "</table>";
}
?>