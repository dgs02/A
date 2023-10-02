<?php

// Genera un array aleatorio de 33 elementos.
$elementos = array();
for ($i = 0; $i < 33; $i++) {
    $elementos[] = rand(0, 100); // Genera un número aleatorio entre 0 y 100.
}

// Calcula el mayor, el menor y la media.
$mayor = max($elementos);
$menor = min($elementos);
$media = array_sum($elementos) / count($elementos);

// Muestra los resultados por pantalla.
echo "Array aleatorio: ";
print_r($elementos);
echo "El mayor valor es: $mayor\n";
echo "El menor valor es: $menor\n";
echo "La media es: $media\n";

?>
