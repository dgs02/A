<!DOCTYPE html>
<html>
<head>
    <title>Números Pares</title>
</head>
<body>
    <h1>Números Pares en un Rango</h1>

    <form method="GET">
        <label for="inicio">Inicio:</label>
        <input type="text" id="inicio" name="inicio">
        <br>
        <label for="fin">Fin:</label>
        <input type="text" id="fin" name="fin">
        <br>
        <input type="submit" value="Mostrar Números Pares">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Recogemos los numeors de incio y fin
        $inicio = ($_GET["inicio"]);
        $fin = ($_GET["fin"]);

        echo "<h2>Números Pares entre $inicio y $fin:</h2>";
        echo "<ul>";

        // Recorremos los numeros para ur mostrado sus pares
        for ($i = $inicio; $i <= $fin; $i++) {
            // introducimos la condicion para no mostrar numeros equivocados
            if ($i % 2 == 0) {
                echo "<li>$i</li>";
            }
        }

        echo "</ul>";
    }
    ?>

</body>
</html>
