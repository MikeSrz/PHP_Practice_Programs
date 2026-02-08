<?php 
session_start(); 
require_once('consultas.php');
require_once('conexionDB.php');
$db = conectarDB($DSN, $USUARIO, $PASSWORD);
$droides = obtenerDroides($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1></h1>
    <!--Tabla donde visualizamos los registros actuales-->
    <?php if(empty($droides)):?>
    <h2>No hay droides.<h2>
    <?php else: ?>
    <table border=1px> 
    <tr>
        <th>nombre</th>
        <th>tipo</th>
        <th>planeta</th>
        <th colspan="2">Accion</th>
    </tr>
    <?php foreach($droides as $droide): ?>
    <tr>
        <td><?php echo $droide['nombre']?></td>
        <td><?php echo $droide['tipo']?></td>
        <td><?php echo $droide['planeta_or']?></td>
        <td>
            <a href="editar.php?id=<?php echo $droide['id']; ?>"> Editar </a>
        </td>
        <td>
            <a href="eliminar.php?id=<?php echo $droide['id']; ?>" onclick="return confirm('¿Seguro que quieres eliminar?')"> Eliminar </a>
        </td>
    </tr>
    <?php endforeach; ?>
   <?php endif; ?>
   </table>
   <h2>Inserta un Droide: </h2>
   <form action="insertarDB.php" method="POST">
       <fieldset>
            <label for="nombre"> Nombre: </label>
            <input type="text" id="nombre" name="nombre" required> 

            <label for="tipo"> Tipo: </label>
            <select id="tipo" name="tipo" required>
                <option value="ASTR">Astromecanico</option>
                <option value="COMB">Droide de Combate</option>
                <option value="PROT">Droide de Protocolo</option>
                <option value="ASIN">Droide Asesino</option>
                <option value="MEDI">Droide Medico</option>
            </select>

            <label for="planeta"> Planeta Origen: </label>
            <select id="planeta" name="planeta">
                <option value="GEO">Geonosis</option>
                <option value="COR">Coruscant</option>
                <option value="NAB">Naboo</option>
                <option value="KAM">Kamino<option>
            </select>

            <button type="submit">Registrar Droide</button>
       </fieldset> 
   </form>
</body>
</html>