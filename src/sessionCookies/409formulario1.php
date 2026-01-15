<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
</head>
<body>
    <!--Este recoge los datos nombre y apellidos, email, url y sexo-->
    <form action="409formulario2.php" method="POST">
        
        <label for="nombre">Nombre y Apellidos:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="url">URL Página Personal:</label>
        <input type="url" id="url" name="url" placeholder="https://tuweb.com">

        <fieldset>
            <legend>Sexo</legend>
            <input type="radio" id="hombre" name="sexo" value="Hombre" checked>
            <label for="hombre" class="inline-label">Hombre</label>

            <input type="radio" id="mujer" name="sexo" value="Mujer">
            <label for="mujer" class="inline-label">Mujer</label>

            <input type="radio" id="otro" name="sexo" value="Otro">
            <label for="otro" class="inline-label">Otro</label>
        </fieldset>
        <button type="submit">Enviar Datos</button>
    </form>
    
</body>
</html>