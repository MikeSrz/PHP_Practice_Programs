<?php
        
    session_start();
    
    if (!isset($_SESSION["datos"]))
        $_SESSION["datos"] = [];
    
?>

<table border="1" align="center">
    <tr>
        <td>Nombre</td>
        <td>Teléfono</td>
    </tr>
    <?php
        if (isset($_POST["enviar"])) {
            $nombre = $_POST["nombre"];
            $telefono = $_POST["telefono"];

            if ($_SESSION["datos"] != null) {
                if ($nombre == null) {
                    echo "<script>alert('No has introducido ningún nombre')</script>";
                }
                else if (in_array($nombre, $_SESSION["datos"]) && $telefono != "") {
                    $_SESSION["datos"][$nombre] = $telefono;
                }
                else if (in_array($nombre, $_SESSION["datos"]) == false && $telefono != null) {
                    $_SESSION["datos"][$nombre] = $telefono;
                }
                else if ($telefono == "") {
                    unset($_SESSION["datos"][$nombre]);
                }
            }
            else {
                $_SESSION["datos"][$nombre] = $telefono;
            }

            foreach ($_SESSION["datos"] as $nombre => $telefono) {
                echo "<tr>";
                echo "<td>".$nombre."</td>";
                echo "<td>".$telefono."</td>";
                echo "</tr>";
            }
        }
    ?>
</table>

<div align="center">
    <form action="" method="post">
        <p><label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"></p>

        <p><label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono"></p>

        <input type="submit" name="enviar" value="Enviar">
    </form>
</div>

<?php

exit();

?>