<?php
// 1. IMPORTANTE: session_start() debe ir ANTES de cualquier etiqueta HTML
session_start();

// 2. Si no existe la lista en la sesión, la creamos con los 3 datos de ejemplo
if (!isset($_SESSION['personas'])) {
    $_SESSION['personas'] = [
        ['nombre' => 'María', 'apellido' => 'Pérez',     'direccion' => 'c/Luna'],
        ['nombre' => 'Pedro', 'apellido' => 'Rodríguez', 'direccion' => 'c/Sol'],
        ['nombre' => 'Sara',  'apellido' => 'López',     'direccion' => 'c/Estrella']
    ];
}

// 3. Procesar el formulario al pulsar "Insertar"
if (isset($_POST['btn_insertar'])) {
    // Añadimos un nuevo array al final de la lista (Sí, con esa nomenclatura tan extraña "[]" se está haciendo un push)
    $_SESSION['personas'][] = [
        'nombre'    => $_POST['nombre'],
        'apellido'  => $_POST['apellido'],
        'direccion' => $_POST['direccion']
    ];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Tabla PHP</title>
</head>
<body>
    <!--Se está llamando a sí mismo-->
    <form action="" method="POST">
        
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['personas'] as $id => $persona): ?>
                    <tr>
                        <td><?= $id ?></td>
                        <td><?= $persona['nombre'] ?></td>
                        <td><?= $persona['apellido'] ?></td>
                        <td><?= $persona['direccion'] ?></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td></td> <td><input type="text" name="nombre" required></td>
                    <td><input type="text" name="apellido" required></td>
                    <td><input type="text" name="direccion" required></td>
                </tr>
            </tbody>
        </table>
        
        <br>
        <input type="submit" name="btn_insertar" value="Insertar">
        
    </form>

</body>
</html>