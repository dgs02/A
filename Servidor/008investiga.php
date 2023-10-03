<?php

/*El termino match funciona d euna forma similiar al switch a diferencia 
de que el switch hace una comparación debil mientras que el match
realiza una comparación de identidad*/ 
$opcion = "b";

$resultado = match($opcion) {
    "a" => "Seleccionaste la opción A",
    "b" => "Seleccionaste la opción B",
    "c" => "Seleccionaste la opción C",
    default => "Opción no válida",
};

echo $resultado;


?>