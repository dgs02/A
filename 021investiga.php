<?php

// ucword lo utilizaremos para convertir la primera letra de cada palabra en mayusculas
$prueba = "ilerna el mejor instituto";
$resultado = ucwords($prueba);
echo $resultado;


// strrev será utilizado para mostrar una cadena al revés
$pruebados = "David";
$resultadodos = strrev($pruebados);
echo "<br>".$resultadodos;

//str_repeat se utiliza para repetir una cadena un numero determinado de veces
$pruebatres = "David";
$resultadotres = str_repeat($pruebatres, 3);
echo "<br>".$resultadotres;

//md5 lo usaremos para calcular de hash de una cadena
$pruebacuatro = "David";
$resultadocuatro = md5($pruebacuatro);
echo "<br>".$resultadocuatro;