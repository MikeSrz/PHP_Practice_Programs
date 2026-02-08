<?php
require_once("conexionDB.php");
function obtenerDroides($db){
    $sql = "SELECT id,nombre, tipo, planeta_or FROM DROIDE ORDER BY nombre DESC";
    try {
        $stm = $db-> query($sql);
        $data = $stm->fetchAll();
        return $data;
    }catch (PDOException $e){
        die("Hubo un error consultando Droides: ".$e);
    }
}
