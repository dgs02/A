<?php

// Creamos un array con las posibles respuestas
$respuestas = array("Si", "No", "Puede", "Seguro", "Imposible", "Vete a chuparla");

// Recoge la pregunta del form y la muestra
$pregunta = $_GET["pregunta"];
echo "Tu pregunta: $pregunta";

// coge un indice aleatorio de el array
$proposicionindice= array_rand($respuestas);
//recogemos la respuesta del indice
$proposicion = $respuestas[$proposicionindice];

// mostramos las respuesta
echo "<br>"."La respues de la bola 8 es: $proposicion";


?>