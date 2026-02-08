<?php
    #Cargando parámetros
    $HOST=getenv('DB_HOST');
    $USUARIO=getenv('DB_USERNAME');
    $PASSWORD=getenv('DB_PASSWORD');
    $DATABASE="star_wars";
    $DSN = "mysql:host=$HOST;dbname=$DATABASE";


    function conectarDB($route, $user, $pass) {
        try {
            $conexion = new PDO($route, $user, $pass);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e){
            die('Falló la conexion: '.$e->getMessage());
        }
    }
