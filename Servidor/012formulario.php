<!DOCTYPE html>
<html>
<head>
    <title>Tabla Generada</title>
</head>
<body>
    <h1>Tabla Generada</h1>

    <?php
    
    if (isset($_POST['filas']) && isset($_POST['columnas'])) {
        $filas = intval($_POST['filas']);
        $columnas = intval($_POST['columnas']);

        
        if ($filas > 0 && $columnas > 0) {
            echo '<table border="1">';
            for ($i = 1; $i <= $filas; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= $columnas; $j++) {
                    echo '<td>(' . $i . ', ' . $j . ')</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo 'Por favor, ingrese un número válido.';
        }
    } else {
        echo 'Complete el formulario.';
    }
    ?>

    <p><a href="012formulario.html">Volver al formulario</a></p>
</body>
</html>
