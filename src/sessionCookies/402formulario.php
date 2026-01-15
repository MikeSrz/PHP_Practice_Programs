<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Datos</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 20px auto; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; color: #333; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .back-btn { display: inline-block; margin-top: 20px; text-decoration: none; color: #007bff; }
    </style>
</head>
<body>

    <h2>Resumen de Datos Recibidos</h2>

    <?php
    // Verificamos que los datos lleguen por POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Recogida y sanitización básica
        $nombre = htmlspecialchars($_POST['nombre'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');
        $url = htmlspecialchars($_POST['url'] ?? '');
        $sexo = htmlspecialchars($_POST['sexo'] ?? 'No especificado');
        $convivientes = htmlspecialchars($_POST['convivientes'] ?? '0');

        // Tratamiento de ARRAYS (Checkboxes y Select Multiple)
        // 1. Verificamos si existe la clave en POST (si no marcan nada, no se envía)
        // 2. Si existe, usamos implode para unir los valores con comas
        $aficiones = isset($_POST['aficiones']) ? implode(", ", $_POST['aficiones']) : "Ninguna seleccionada";
        $menu = isset($_POST['menu']) ? implode(", ", $_POST['menu']) : "Ninguno seleccionado";
        
        // Sanitizamos el resultado de los arrays también por seguridad
        $aficiones = htmlspecialchars($aficiones);
        $menu = htmlspecialchars($menu);

        echo "<table>";
        echo "<thead><tr><th>Campo</th><th>Valor Usuario</th></tr></thead>";
        echo "<tbody>";
        echo "<tr><td><strong>Nombre y Apellidos</strong></td><td>$nombre</td></tr>";
        echo "<tr><td><strong>Email</strong></td><td>$email</td></tr>";
        echo "<tr><td><strong>URL Personal</strong></td><td><a href='$url' target='_blank'>$url</a></td></tr>";
        echo "<tr><td><strong>Sexo</strong></td><td>$sexo</td></tr>";
        echo "<tr><td><strong>Nº Convivientes</strong></td><td>$convivientes</td></tr>";
        echo "<tr><td><strong>Aficiones</strong></td><td>$aficiones</td></tr>";
        echo "<tr><td><strong>Menú Favorito</strong></td><td>$menu</td></tr>";
        echo "</tbody>";
        echo "</table>";

    } else {
        echo "<p style='color:red'>Error: No se han enviado datos. Accede desde el formulario.</p>";
    }
    ?>

    <a href="402formulario.html" class="back-btn">← Volver al formulario</a>

</body>
</html>