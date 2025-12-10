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
    function digitoN(int $num, int $pos){
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
    //123%100 => 23
    function quitarPorDetras(int $num, int $cant){
        $len = cuentaDigitos($num);
        if ($cant > $len) {
            return "No se puede hacer";
        }
        else if ($len == 1) {
            return $num;
        }
        return $num%(10**$cant);
    }
    //123%2
    function quitarPorDelante(int $num, int $cant){
        $len = cuentaDigitos($num);
        if ($cant > $len) {
            return "No se puede hacer";
        }
        else if ($len == 1) {
            return $num;
        }
        $extract = $len - $cant;
        return ($num-($num%10**$extract))/10**$extract;
    }
    echo digitoN(4434,2);
    echo "<br>";
    echo quitarPorDetras(2002,4);
    echo "<br>";
    echo quitarPorDelante(2002, 1);
    echo "<br>";
    $max = devuelveValores(1,3,4,5,6,100,2);
    echo "<p>".concatenar(1, 2, 3)."</p>";
    echo "<p>$max</p>";
?>