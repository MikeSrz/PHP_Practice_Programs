<?php
    $randomNumbers = [];
    for ($i = 0;$i < 50;$i++){
        $randomNumbers[$i] = rand(0,99);
    }
    foreach ($randomNumbers as $number){
        echo "$number ";
    }
   print_r($randomNumbers);
?>