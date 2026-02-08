<?php
    require_once('conexionDB.php');
    $db = conectarDB($DSN, $USUARIO, $PASSWORD);
    $creaDroide = "CREATE TABLE IF NOT EXISTS DROIDE(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nombre VARCHAR(55),
            tipo CHAR(4),
            planeta_or INT,
            CONSTRAINT FK_PLANETA FOREIGN KEY(planeta_or) REFERENCES PLANETA(id)
            )";
    
    $creaPlaneta = "CREATE TABLE IF NOT EXISTS PLANETA(
            id INT PRIMARY KEY AUTO_INCREMENT,
            nombre VARCHAR(55),
            poblacion INT,
            fk_faccion CHAR(5),
            CONSTRAINT FK_FACCION_Pla FOREIGN KEY(fk_faccion) REFERENCES FACCION(code)
            )
            ";
    
    $creaFaccion = "CREATE TABLE IF NOT EXISTS FACCION(
            code CHAR(5) PRIMARY KEY,
            nombre VARCHAR(100),
            cant_naciones INT
    )";
    try {
        $db -> exec($creaFaccion);
        $db -> exec($creaPlaneta);
        $db -> exec($creaDroide);
        echo "Se ha creado el diseño correctamente.";
    } catch(PDOException $e){
        die("Error al crear la tabla: " . $e->getMessage());
    }

    
?>