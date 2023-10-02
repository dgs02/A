<?php

$respuestas = array("Si", "No", "Puede", "Seguro", "Imposible", "Vete a chuparla");


$pregunta = $_GET["pregunta"];
echo "Tu pregunta: $pregunta";

$proposicionindice= array_rand($respuestas);
$proposicion = $respuestas[$proposicionindice];


echo "<br>"."La respues de la bola 8 es: $proposicion";


?>