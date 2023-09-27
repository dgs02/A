<!DOCTYPE html>
<html>
<head>
    <title>Datos Personales</title>
</head>
<body>
    <?php
        //Aquí creamos las varibales y asignamos sus datos
        $nombre = "David";
        $primerApellido = "Gonzalez";
        $segundoApellido = "Saez";
        $email = "gdavid1004@gmail.com";
        $anoNacimiento = 2002;
        $movil = "644958756";
    ?>

    <h1>Tabla</h1>
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
            <td><?php echo $anoNacimiento; ?></td>
        </tr>
        <tr>
            <th>Móvil</th>
            <td><?php echo $movil; ?></td>
        </tr>
    </table>
</body>
</html>
