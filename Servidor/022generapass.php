<?php

function generarContraseñaAleatoria($longitud) {
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $contraseña = '';

    for ($i = 0; $i < $longitud; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $contraseña .= $caracteres[$indice];
    }

    return $contraseña;
}

// Ejemplo de uso de la función para generar una contraseña de longitud 10:
$contraseñaGenerada = generarContraseñaAleatoria(10);
echo $contraseñaGenerada;

?>
