<?php
    $sexs = ['M', 'F'];
    $sexCount = ['M' => 0, 'F' => 0];

    for($i=0;$i < 100; $i++) {
        $rand = array_rand($sexs);
        $sexCount[$rand]++;
    }

    print_r($sexCount);
?>