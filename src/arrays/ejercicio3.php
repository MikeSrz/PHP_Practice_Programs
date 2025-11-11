<?php
    $randomNumbers = [];
    for ($i = 0;$i < 33;$i++){
        $randomNumbers[$i] = rand(0,100);
    }

    echo "<p>Números aleatorios generados</p>";
    foreach ($randomNumbers as $number){
        echo "$number ";
    }

    $maxNumber = max($randomNumbers);
    $minNumber = min($randomNumbers);
    $avgNumber = array_sum($randomNumbers) / count($randomNumbers);

    echo "Máximo: $maxNumber | ";
    echo "Mínimo: $minNumber | ";
    echo "Media: $avgNumber | " ;
   print_r($randomNumbers);
?>