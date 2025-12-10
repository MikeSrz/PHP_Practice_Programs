<?php
    function devuelveValores(...$numeros){
        $max = $numeros[0];
        foreach($numeros as $num){
            if ($num > $max) {
                $max = $num;
            }
        }
        return $max;
    }

    function concatenar(){
        $concatenacion = "";
        foreach(func_get_args() as $e){
            $concatenacion = $concatenacion." ".$e;
        }
        return $concatenacion;
    }

    function cuentaDigitos(int $num) {
        if ($num == 0) {
            return 1;
        }
        $count = 1;
        while ($num > 10) {
            $num = $num/10;
            $count +=1;
        }
        return $count;
    }
//4434 longitud-1 = 3  - 2 => 1
//
    function quitarPorDetras(int $num, int $pos){
        $len = cuentaDigitos($num);
        if ($pos > $len) {
            return "No se puede hacer";
        }
        else if ($len == 1) {
            return $num;
        }
        $limit = $len-1-$pos;
        $count = 0;
        while ($num > 10) {
            if ($limit == $count) {
                return $num%10;
            }
            else {
            $num -=$num%10;
            $num = $num/10;
            $count +=1;
            }
        }
    }
    function quitarPorDetras(int $num, int $cant){
        
    }
    echo quitarPorDetras(4434,2);
    echo "<br>";
    $max = devuelveValores(1,3,4,5,6,100,2);
    echo "<p>".concatenar(1, 2, 3)."</p>";
    echo "<p>$max</p>";
?>