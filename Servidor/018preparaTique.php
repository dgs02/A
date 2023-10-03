<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tique de Compra</title>
</head>
<body>
<?php
// Define los productos y sus precios en euros
$productos = array(
    array("Nombre Producto 1", 10.50),
    array("Nombre Producto 2", 5.25),
    array("Nombre Producto 3", 8.75),
);

// definimos la variable para hacer el cambio a peseta
$CambioAPesetas = 166.386;

// iniciamos las variables
$totalEuros = 0;
$totalPesetas = 0;

echo "<h2>Detalle del Tique de Compra</h2>";
echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Precio en Euros (€)</th><th>Precio en Pesetas (₧)</th></tr>";

foreach ($productos as $producto) {
    $nombre = $producto[0];
    $precioEuros = $producto[1];
    $precioPesetas = $precioEuros * $tasaCambioEurosAPesetas;

    echo "<tr><td>$nombre</td><td>€$precioEuros</td><td>₧$precioPesetas</td></tr>";

    $totalEuros += $precioEuros;
    $totalPesetas += $precioPesetas;
}

echo "<tr><td><strong>Total:</strong></td><td><strong>€$totalEuros</strong></td><td><strong>₧$totalPesetas</strong></td></tr>";
echo "</table>";
?>
</body>
</html>
