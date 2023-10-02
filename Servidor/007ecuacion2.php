<?php


$a = 2;
$b = -5;
$c = 2;


$discriminante = $b * $b - 4 * $a * $c;


if ($discriminante > 0) {
   
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    echo "La ecuación tiene dos soluciones reales distintas:<br>";
    echo "x1 = $x1<br>";
    echo "x2 = $x2<br>";
} elseif ($discriminante == 0) {
    
    $x1 = -$b / (2 * $a);
    echo "La ecuación tiene una solución real única (raíz doble):<br>";
    echo "x1 = $x1<br>";
} else {
    
    echo "La ecuación no tiene soluciones reales.<br>";
}


?>