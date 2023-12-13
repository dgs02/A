<?php 

$conexion = mysqli_connect("localhost", "root", "", "ilerbank");

if (mysqli_connect_error()) {
    echo "Fallo en la conexión" . mysqli_connect_error();
    exit();
}

// Verifica si se han enviado datos por GET
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["tipo_usuario"]) && isset($_GET["nombre"]) && isset($_GET["apellidos"]) && isset($_GET["dni"]) && isset($_GET["email"]) && isset($_GET["fecha"]) && isset($_GET["direccion"]) && isset($_GET["codigo_postal"]) && isset($_GET["ciudad"]) && isset($_GET["provincia"]) && isset($_GET["pais"]) && isset($_GET["iban"])) {
    // Obtiene los datos del formulario
    $tipousuario = $_GET["tipo_usuario"];
    $username = $_GET["nombre"];
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
    $es_admin = false;

    // Utilizando consultas preparadas para evitar la inyección SQL
    $consulta = "INSERT INTO usuarios (tipo_usuario, Nombre, Apellidos, DNI, email, Fecha, Direccion, Codigo_Postal, Ciudad, Provincia, Pais, IBAN, es_administrador) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = mysqli_prepare($conexion, $consulta);

    // Vincular los parámetros
    mysqli_stmt_bind_param($stmt, "sssssssssssss", $tipousuario, $username, $apellidos, $DNI, $email, $fecha, $direccion, $codigopostal, $ciudad, $provincia, $pais, $iban, $es_admin);

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
   
</head>
<body>




<div class="container">
    <form action="RegisterScript.php" method="get">
        <label for="tipo_usuario">Tipo de Usuario:</label>
        <input type="text" id="tipo_usuario" name="tipo_usuario" required><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br>

        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br>

        <label for="codigo_postal">Código Postal:</label>
        <input type="text" id="codigo_postal" name="codigo_postal" required><br>

        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required><br>

        <label for="provincia">Provincia:</label>
        <input type="text" id="provincia" name="provincia" required><br>

        <label for="pais">País:</label>
        <input type="text" id="pais" name="pais" required><br>

        <label for="iban">IBAN:</label>
        <input type="text" id="iban" name="iban" required><br>

        <label for="es_administrador">¿Es administrador?</label>
        <input type="checkbox" id="es_administrador" name="es_administrador"><br>

        <input type="submit" value="Enviar">
    </form>


</body>
</html>
