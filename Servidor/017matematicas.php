<?php
$num = 12345;

// Función para contar la cantidad de dígitos en un número
function digitos(int $num): int {
    return strlen((string)$num);
}

echo "Número de dígitos en $num: " . digitos($num) . "\n";

// Función para obtener un dígito en una posición específica
function digitoN(int $num, int $pos): int {
    $numStr = (string)$num;
    
    if ($pos >= 0 && $pos < strlen($numStr)) {
        return (int)$numStr[$pos];
    } else {
        return -1; // Devolvemos -1 si la posición está fuera de rango
    }
}

echo "Dígito en la posición 2 de $num: " . digitoN($num, 2) . "\n";

// Función para quitar dígitos por detrás (derecha) de un número
function quitaPorDetras(int $num, int $cant): int {
    if ($cant >= 0) {
        $numStr = (string)$num;
        $numStr = substr($numStr, 0, strlen($numStr) - $cant);
        return (int)$numStr;
    } else {
        return $num; // Si $cant es negativo, no se quita ningún dígito
    }
}

echo "Quitar 2 dígitos por detrás de $num: " . quitaPorDetras($num, 2) . "\n";

// Función para quitar dígitos por delante (izquierda) de un número
function quitaPorDelante(int $num, int $cant): int {
    if ($cant >= 0) {
        $numStr = (string)$num;
        $numStr = substr($numStr, $cant);
        return (int)$numStr;
    } else {
        return $num; // Si $cant es negativo, no se quita ningún dígito
    }
}

echo "Quitar 2 dígitos por delante de $num: " . quitaPorDelante($num, 2) . "\n";







?>
