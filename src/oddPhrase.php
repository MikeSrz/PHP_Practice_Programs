<?php
    function printPairs($phrase, bool $showPairs = true) {
    $result = "";
    if ($showPairs) {
        $start = 0;
    }
    else {
        $start = 1;
    }
        for ($i = $start; $i < strlen($phrase);$i += 2){
            $result .= $phrase[$i];
        }
        return $result;
    }

    $phrase = $_GET["phrase"];
    echo "<h3> Las letras en posición impar: <h3>";
    echo printPairs($phrase, false);
?>
