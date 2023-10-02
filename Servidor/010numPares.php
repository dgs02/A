<!DOCTYPE html>
<html>
<head>
    <title>Números Pares</title>
</head>
<body>
    <h1>Números Pares en un Rango</h1>

    <form method="post">
        <label for="inicio">Inicio:</label>
        <input type="text" id="inicio" name="inicio">
        <br>
        <label for="fin">Fin:</label>
        <input type="text" id="fin" name="fin">
        <br>
        <input type="submit" value="Mostrar Números Pares">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inicio = intval($_POST["inicio"]);
        $fin = intval($_POST["fin"]);

        echo "<h2>Números Pares entre $inicio y $fin:</h2>";
        echo "<ul>";

        for ($i = $inicio; $i <= $fin; $i++) {
            if ($i % 2 == 0) {
                echo "<li>$i</li>";
            }
        }

        echo "</ul>";
    }
    ?>

</body>
</html>
