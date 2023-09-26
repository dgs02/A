<!DOCTYPE html>
<html>
<head>
    <title>Datos Personales</title>
</head>
<body>
    <?php
        // Recoger los datos del formulario
        $nombre = $_POST["nombre"];
        $primerApellido = $_POST["primerApellido"];
        $segundoApellido = $_POST["segundoApellido"];
        $email = $_POST["email"];
        $anioNacimiento = $_POST["anioNacimiento"];
        $movil = $_POST["movil"];
    ?>

    <h1>Datos Personales</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
            <th>Primer Apellido</th>
            <td><?php echo $primerApellido; ?></td>
        </tr>
        <tr>
            <th>Segundo Apellido</th>
            <td><?php echo $segundoApellido; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <th>Año de Nacimiento</th>
            <td><?php echo $anioNacimiento; ?></td>
        </tr>
        <tr>
            <th>Móvil</th>
            <td><?php echo $movil; ?></td>
        </tr>
    </table>
</body>
</html>
