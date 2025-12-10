<?php
include 'header.php';
?>
    <form action="procesar_login.php" method="POST">
        
        <div>
            <label for="user">Usuario:</label>
            <input type="text" id="user" name="usuario" required>
        </div>

        <br>

        <div>
            <label for="pass">Contraseña:</label>
            <input type="password" id="pass" name="password" required>
        </div>

        <br>

        <button type="submit">Iniciar Sesión</button>
    
    </form>
<?php
include 'footer.php';
?>
