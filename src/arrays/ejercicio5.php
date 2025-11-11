<?php
    if (isset($_GET['money'])) {
        $money = (int)$_GET['money'];
        $bills = [500, 200, 100, 50, 20, 10, 5];
        $coins = [2,1];
        $cashCalculated = [];

        foreach ($bills as $bill) {
            while ($money >= $bill) {
                $money -= $bill;
                array_push($cashCalculated, $bill);
            }
        }
        foreach ($coins as $coin){
            while ($money >= $coin) {
                $money-=$coin;
                array_push($cashCalculated, $coin);
            }
        }

    print_r($cashCalculated);
    }
    else {
        echo "No has introducido dinero.";
    }

?>