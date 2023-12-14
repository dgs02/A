<?php
$conexion = mysqli_connect("localhost", "root", "", "ilerbank");

if(mysqli_connect_error()){
    echo "Fallo en la conexión" . mysqli_connect_error();
    exit();
}

// Inicializar la variable $mensaje
$mensaje = "";

// Verificar si se han enviado datos por GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["username"]) && isset($_GET["password"])) {
    // Obtener los datos del formulario
    $username = $_GET["username"];
    $password = $_GET["password"];

    $consultaNombre = "SELECT Nombre FROM usuarios WHERE Nombre = '$username'";
    $resultado = mysqli_query($conexion, $consultaNombre);

    // Verificar si las credenciales son válidas
    if ($fila = mysqli_fetch_assoc($resultado)) {
        // Inicio de sesión exitoso, redirigir a inicio.php
        header("Location: bienvenida.php?username=" . urlencode($username));
        exit();
    } else {
        // Inicio de sesión fallido, mostrar mensaje de error
        $mensaje = "Usuario o contraseña incorrectos.";
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <h2>Iniciar Sesión</h2>
        <!-- Mostrar el mensaje de error si existe -->
        <?php if (!empty($mensaje)) : ?>
            <p class="mensaje-error"><?php echo $mensaje; ?></p>
        <?php endif; ?>
        <form id="loginForm" action="login.php" method="get">
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
