<?php

function alternar($cadena) {
    $resultado = '';
    $convertirAMayusculas = true;

    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        if ($convertirAMayusculas) {
            $resultado .= strtoupper($caracter);
        } else {
            $resultado .= strtolower($caracter);
        }

        $convertirAMayusculas = !$convertirAMayusculas;
    }

    return $resultado;
}

// Ejemplo de uso de la función:
$cadena = "Hola, esta es una cadena con alternancia.";
$cadenaTransformada = alternar($cadena);
echo $cadenaTransformada;

?>
