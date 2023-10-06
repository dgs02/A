<?php

// Inicializa un array vacío para almacenar los valores aleatorios.
$elementos = array();

// Llena el array con 100 elementos aleatorios "M" o "F".
for ($i = 0; $i < 100; $i++) {
    $random = rand(0, 1); 
    if ($random == 0) {
        $elementos[] = "M"; 
    } else {
        $elementos[] = "F"; 
    }
}

// Inicializa un array
$resultado = array('M' => 0, 'F' => 0);

// Recorre y cuenta las M y F
foreach ($elementos as $valor) {
    if ($valor == "M") {
        $resultado['M']++;
    } elseif ($valor == "F") {
        $resultado['F']++;
    }
}

echo "Resultado:\n";
print_r($resultado);

?>
