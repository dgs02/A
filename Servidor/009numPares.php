<!DOCTYPE html>
<html>
<head>
    <title>Números Pares</title>
</head>
<body>
    <h1>Números Pares del 0 al 50</h1>
    <ul>
        <?php
        for ($i = 0; $i <= 50; $i += 2) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>
</body>
</html>
