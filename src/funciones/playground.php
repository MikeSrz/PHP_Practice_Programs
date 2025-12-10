<?php
//DEClARACION DE FUNCIONES
function nombreFuncion($par1, $par2){
    $valor = $par1+$par2*8;
    return $valor;
}
$resultado = nombreFuncion(1,2);
echo "<p>$resultado<p>";

function borrarDuplicados($lista){
    $uniques = [];
   for($i=0; $i < count($lista); $i++) {
        if (!in_array($lista[$i], $uniques)){
            array_push($uniques, $lista[$i]);
        } 
   }
   return $uniques;
}
$lista = [1,2,3,3,3,4,5];
$lista = borrarDuplicados($lista);
foreach($lista as $number){
    echo "<p>".$number."</p>";
}

//PASO POR REFERENCIA
function reverseArray(&$array){
    for ($i=0; $i < count($array)/2; $i++) {
       $temp = $array[$i];
       $array[$i] = $array[count($array)-1-$i];
       $array[count($array)-1-$i] = $temp;
    }
}

$array = [1,2,3,4,5,6];
reverseArray($array);
foreach($array as $num){
    echo "$num <br>";
}
//PARÁMETROS POR DEFECTO (Siempre deberán ir al final si hay algunos que no tienen por defecto )
function mostrarNombre($edad, $nombre="John", $apellido="Doe"){
    echo "<p> $nombre $apellido $edad años </p>";
}

mostrarNombre(23);
mostrarNombre(23,"Michael","Suarez");

//PARAMETROS VARIABLES
function sumaParametros() {
    $position = 1;
    $arrayArgs = func_get_args(); //obtiene un array con los argumentos
    $cantidad = func_num_args(); //cantidad de argumentos
    $valor = func_get_arg($position); //argumento en la posicion dada
    $total = 0;
    for ($i = 0;$i<$cantidad;$i++){
        $total+=func_get_arg($i);
    }
    return $total;
}
echo  "<p>".sumaParametros(1,2,3,4,5)."</p>";

function sumaParametros2(...$numeros){
    return array_sum($numeros);
}
echo sumaParametros2(1,2,3,4,5,7,7,7,9);
echo "<br>";

//PARAMETROS CON NOMBRE

function sumaParametros3($a,$b,$c=2,$d=3){
    return array_sum(func_get_args());
}
echo sumaParametros3(d: 1,a: 2,b: 3,c: 4);
echo "<br>";
//ARGUMENTOS TIPADOS 
//declare(strict_types=1)
//Puedes hacer que las funciones funcionen con argumentos tipados,
//pero se debe poner al principio de un fichero php.


//VARIABLE CON FUNCIÓN
//El nombre de mi funcion está en una variable
$miFuncion = "sumaParametros";
echo $miFuncion(3,4);
echo "<br>";
?>


