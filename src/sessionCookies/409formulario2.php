<?php
    if (!isset($_GET)) {
        echo "No se han introducido los datos";
    }
    else {
        $nombreApellidos = $_GET["nombre"];
        $email = $_GET["email"];
        $url = $GET["url"];
        $sexo = $GET["sexo"];
    }


?>