<?php
require_once('conexionDB.php');
session_start();
function validarDroide($datos){
    $errores = [];
    $tipos_permitidos = ['ASTR', 'COMB', 'PROT', 'ASIN', 'MEDI'];
    $planetas_permitidos = ['GEO', 'COR', 'NAB', 'KAM'];
    if (empty($datos['nombre'])){
        array_push($errores, "Falta Nombre");
    }
    if (strlen($datos['nombre']) > 55){
        array_push($errores, "El nombre es demasiado largo");
    }
    if (empty($datos['tipo'])){
        array_push($errores, "Tipo no puede estar vacío");
    }
    if (!in_array($datos['tipo'], $tipos_permitidos) ){
        array_push($errores, "El tipo introducido no está entre".implode(",", $tipos_permitidos));
    }
    if (empty($datos['planeta'])){
        array_push($errores, "No se puede dejar vacío el planeta.");
    }
    if(!in_array($datos['planeta'], $planetas_permitidos)){
        array_push($errores, "El planeta introducido no está entre $planetas_permitidos");
    }
    return $errores;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = validarDroide($_POST);
    if (empty($errores)){
        $datos = [
            "nombre" => $_POST['nombre'],
            "tipo" => $_POST['tipo'],
            "planeta" => $_POST['planeta']
        ];
        $db = conectarDB($DSN, $USUARIO, $PASSWORD);
        $sql = "INSERT INTO DROIDE(nombre, tipo, planeta_or)VALUES(:nombre,:tipo,:planeta)";
        try {
            $stm =  $db -> prepare($sql);
            $result = $stm->execute($datos);
            $_SESSION['mensaje_query'] = "Se insertó el droide correctamente.";
        } catch(PDOException $e){
            $_SESSION['error_query'] = "Hubo un error en la inserción.".$e->getMessage();
        }

    }
    else {
        $_SESSION['error'] = $errores;
    }

    header("Location: index.php"); // Redirigir tras insertar
    exit();
}
?>