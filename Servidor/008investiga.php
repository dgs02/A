<?php
/**/ 

$opcion = "b";

$resultado = match($opcion) {
    "a" => "Seleccionaste la opción A",
    "b" => "Seleccionaste la opción B",
    "c" => "Seleccionaste la opción C",
    default => "Opción no válida",
};

echo $resultado;


?>