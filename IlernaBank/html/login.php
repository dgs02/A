<?php
$conexion = mysqli_connect("localhost", "root", "", "ilerbank");

if (mysqli_connect_error()) {
    echo "Fallo en la conexión" . mysqli_connect_error();
    exit();
}

// Inicializar la variable $mensaje
$mensaje = "";

// Verificar si se han enviado datos por GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["username"]) && isset($_GET["password"])) {
    // Obtener los datos del formulario 
    $username = trim($_GET["username"]);
    $password = trim($_GET["password"]);


    // Preparar la consulta con parámetros
    $consulta = "SELECT Nombre, contraseña FROM usuarios WHERE Nombre = ?";
    $stmt = mysqli_prepare($conexion, $consulta);

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "s", $username);

    // Ejecutar la consulta
    mysqli_stmt_execute($stmt);

    // Vincular el resultado
    mysqli_stmt_bind_result($stmt, $nombreResultado, $contraseñaResultado);

    // Obtener los resultados
    mysqli_stmt_fetch($stmt);

    // Verificar si las credenciales son válidas
    if ($username == $nombreResultado && $password == $contraseñaResultado) {
        // Inicio de sesión exitoso, redirigir a bienvenida.php
        header("Location: bienvenida.php?username=" . urlencode($username));
        exit();
    } else {
        // Inicio de sesión fallido, mostrar mensaje de error detallado
        $mensaje = "Error en las credenciales";
    }


    // Cerrar la conexión y la declaración preparada
    mysqli_stmt_close($stmt);

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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Scripts de Bootstrap y jQuery -->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<body>

    <section>
        <div class="container">
            <h2>Iniciar Sesión</h2>
            <!-- Mostrar el mensaje de error si existe -->
            <?php if (!empty($mensaje)): ?>
                <p class="mensaje-error">
                    <?php echo $mensaje; ?>
                </p>
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
    </section>

    <script src="script.js"></script>
</body>

</html>