<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>

    <form method="GET">
        <label for="numero">Número:</label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Generar Tabla">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $numero = intval($_GET["numero"]);

        echo "<h2>Tabla de Multiplicar del $numero:</h2>";
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Multiplicando</th>";
        echo "<th>Resultado</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr>";
            echo "<td>$numero x $i</td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    }
    ?>
</body>
</html>
