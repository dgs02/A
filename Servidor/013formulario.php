<!DOCTYPE html>
<html>
<head>
    <title>Tabla Generada</title>
</head>
<body>
    <h1>Tabla Generada</h1>

    <?php
    // Obtener el número de filas y columnas ingresado por el usuario
    $filas = isset($_POST['filas']) ? intval($_POST['filas']) : 0;
    $columnas = isset($_POST['columnas']) ? intval($_POST['columnas']) : 0;

    // Verificar que los valores sean válidos
    if ($filas > 0 && $columnas > 0) {
        echo '<table>';
        for ($i = 1; $i <= $filas; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $columnas; $j++) {
                if ($i == 1 || $i == $filas || $j == 1 || $j == $columnas) {
                    echo '<td>' . $i . ',' . $j . '</td>';
                } else {
                    echo '<td></td>';
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>Por favor, ingrese un número válido de filas y columnas.</p>';
    }
    ?>

    <p><a href="013formulario.html">Volver al formulario</a></p>
</body>
</html>
