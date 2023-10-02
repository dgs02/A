<?php

// Creamos la función
function transformarAMayusculas($cadena) {
    $cadenaMayusculas = strtoupper($cadena);
    return $cadenaMayusculas;
}

// Ejemplo 
$cadena = "Hola, esto es una cadena en minúsculas.";
$cadenaConvertida = transformarAMayusculas($cadena);
echo $cadenaConvertida;

?>
