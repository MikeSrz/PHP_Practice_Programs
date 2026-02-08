<?php
    #Cargando parámetros
    $host=getenv('DB_HOST');
    $usuario=getenv('DB_USERNAME');
    $password=getenv('DB_PASSWORD');
    $database="star_wars";
    $dsn = "mysql:host=$host;dbname=$database";
    
    try {
        $conexion = new PDO($dsn, $usuario, $password);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Se ha establecido la conexión.";
    } catch (PDOException $e){
        echo 'Falló la conexion: '.$e->getMessage();
    }
?>
