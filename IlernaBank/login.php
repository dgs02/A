<?php
$conexion = mysqli_connect("localhost", "root", "", "ilerbank");

if(mysqli_connect_error()){
    echo "Fallo en la conexión" . mysqli_connect_error();
    exit();
}

// Verifica si se han enviado datos por GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["username"]) && isset($_GET["password"])) {
    // Obtiene los datos del formulario
    $username = $_GET["username"];
    $password = $_GET["password"];

    $consultaNombre = "SELECT Nombre FROM usuarios WHERE Nombre = '$username'";
    $resultado = mysqli_query($conexion, $consultaNombre);

    // Verifica si las credenciales son válidas
    if ($fila = mysqli_fetch_assoc($resultado)) {
        // Inicio de sesión exitoso
        echo "¡Inicio de sesión exitoso!";
    } else {
        // Inicio de sesión fallido
        echo "Usuario o contraseña incorrectos.";
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <form id="loginForm" action="Login.php" method="get">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <a href="Register.php"><button>Registrarse</button></a>
    </div>

    <script src="script.js"></script>
</body>
</html>
