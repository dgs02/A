<!DOCTYPE html>
<html>
<head>
    <title>Números Pares</title>
</head>
<body>
    <h1>Números Pares del 0 al 50</h1>
    <ul>
        <?php
        // creamos un bucle que vaya sumando de dos en dos para mostrar los pares
        for ($i = 0; $i <= 50; $i += 2) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>
