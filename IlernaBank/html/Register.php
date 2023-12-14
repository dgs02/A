<?php

$conexion = mysqli_connect("localhost", "root", "", "ilerbank");

if (mysqli_connect_error()) {
    echo "Fallo en la conexión" . mysqli_connect_error();
    exit();
}

// Verifica si se han enviado datos por GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nombre"]) && isset($_GET["apellidos"]) && isset($_GET["dni"]) && isset($_GET["email"]) && isset($_GET["fecha"]) && isset($_GET["direccion"]) && isset($_GET["codigo_postal"]) && isset($_GET["ciudad"]) && isset($_GET["provincia"]) && isset($_GET["pais"]) && isset($_GET["iban"]) && isset($_GET["password"])) {
    // Obtiene los datos del formulario
    $username = $_GET["nombre"];
    $tipousuario = "normal";
    $apellidos = $_GET["apellidos"];
    $DNI = $_GET["dni"];
    $email = $_GET["email"];
    $fecha = $_GET["fecha"];
    $direccion = $_GET["direccion"];
    $codigopostal = $_GET["codigo_postal"];
    $ciudad = $_GET["ciudad"];
    $provincia = $_GET["provincia"];
    $pais = $_GET["pais"];
    $iban = $_GET["iban"];
    $password = $_GET["password"];

    // Utilizando consultas preparadas para evitar la inyección SQL
    $consulta = "INSERT INTO usuarios (tipo_usuario, Nombre, Apellidos, DNI, email, Fecha, Direccion, Codigo_Postal, Ciudad, Provincia, Pais, IBAN, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, $consulta);

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $tipousuario, $username, $apellidos, $DNI, $email, $fecha, $direccion, $codigopostal, $ciudad, $provincia, $pais, $iban, $password);

    // Ejecutar la consulta
    $resultado = mysqli_stmt_execute($stmt);

    // Verificar el resultado
    if ($resultado) {
        echo "Registro exitoso";
    } else {
        echo "Error en la inserción: " . mysqli_error($conexion);
    }

    // Cerrar la consulta preparada y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
    <!-- Scripts de Bootstrap y jQuery -->
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>




<div class="container mt-5">
        <form action="Register.php" method="get">

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>

            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>

            <div class="form-group">
                <label for="codigo_postal">Código Postal:</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>
            </div>

            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
            </div>

            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <input type="text" class="form-control" id="provincia" name="provincia" required>
            </div>

            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" id="pais" name="pais" required>
            </div>

            <div class="form-group">
                <label for="iban">IBAN:</label>
                <input type="text" class="form-control" id="iban" name="iban" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

</body>

</html>