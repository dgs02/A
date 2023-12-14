<?php
setlocale(LC_TIME, 'es_ES.UTF-8'); // Establecer la configuración regional en español

// Establecer la conexión a la base de datos (debes completar con tus propios detalles de conexión)
$conexion = mysqli_connect("localhost", "root", "", "ilerbank");

if(mysqli_connect_error()){
    echo "Fallo en la conexión" . mysqli_connect_error();
    exit();
}
mysqli_close($conexion);

if(isset($_GET["username"])){
    $username = $_GET["username"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a IlerBank</title>
</head>
<body>
    <header>
        <!-- Banner del banco -->
        <img src="../img/IlerBank.png" alt="Banner del Banco XYZ">
    </header>
    <main>
        <?php
        $fechaActual = date("d-m-Y");
        // Mostrar el saludo utilizando la variable $username
        echo "<h1>Hola " . strtoupper($username) . ", hoy es " . $fechaActual . "</h1>";
        ?>
    </main>
</body>
</html>
