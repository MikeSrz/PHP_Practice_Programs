<?php
    echo "<h2>Ejercicio0(repaso)</h2>";
    //Formas de declarar un array en PHP
    $frutas = array("naranja", "pera", "manzana");
    $frutas2 = ["naranja", "pera", "manzana"];
    echo $frutas2[0];
    $tam = count($frutas); // count() Devuelve el tamaño del array
    echo "<br>"; //Salto de linea.
    echo " $tam"; //
    echo "<h3>Recorriendo array con foreach</h3>";
    foreach ($frutas as $fruta) {
        echo "$fruta <br>";
    }

    echo "<h3> Arrays asociativos</h3>";
    //Así se declara un array asociativo, similar a un diccionario.
    $capitales = ["Italia" => "Roma", "Francia" => "Paris", "Portugal" => "Lisboa"];
    $capitalFrancia = $capitales["Francia"];
    echo "$capitalFrancia";

    $capitales["España"] = "Madrid"; //Añadiendo capital.

    echo "<h3>Recorriendo un array asociativo";
    //Recorriendo valores.
    foreach ($capitales as $v) {
        echo "$v <br>";
    }
    //Recorriendo clave y valor
    foreach ($capitales as $k => $v)
        echo "$k = $v <br>";

    //FUNCIONES DE ARRAYS
    print_r($frutas); //Imprime un array.
    array_push($frutas, "piña"); //pushea "piña".
    array_pop($frutas); //Elimina el último elemento del array
    array_rand($frutas); //Elemento random de array
    array_keys($capitales); //Devueve las llaves
    sort($frutas); //Ordena el array.
    isset($array[0]); //Mira si está inicializado.
    unset($array[0]); //Elimina ese elemento de esa posición. DEJA HUECO

    //COMPROBAR SI UN ELEMENTO ESTÁ EN UN ARRAY (in_array())
    if (in_array("piña", $frutas))
        echo "<p>Hay piña</p>";
    else
        echo "<p>Hay piña</p>";

    //ARRAYS BIDIMENSIONALES:
    $menu1 = ["Plato1" => "Macarrones", "Plato2" => "Pescado asado", "Bebida" => "Coca-cola"];
    $menu2 = ["Plato1" => "rabiolis", "Plato2" => "Pescado frito", "Bebida" => "fanta"];
    $menus[] = [$menu1,$menu2] ; //creamos un array apartir de dos asociativos.

    foreach ($menus as $menudeldia) {
        echo "Menú del día<br/>";
        foreach ($menudeldia as $k => $v) {
            echo "$k: $v";
        }
    }
?>