<?php
// Obtener la edad de la persona desde la URL
if (isset($_GET['edad'])) {
    $edad = intval($_GET['edad']); 
    echo "Edad actual: $edad años<br>";

    // Obtenemos el año actual
    $anyoActual = date("Y"); 

    // Edad dentro de 10 años
    $edadEn10Anos = $edad + 10;
    echo "Edad dentro de 10 años: $edadEn10Anos años, en el año $anyoActual + 10<br>";

    // Edad hace 10 años
    $edadHace10Anos = $edad - 10;
    echo "Edad hace 10 años: $edadHace10Anos años, en el año $anyoActual - 10<br>";

    // Año de jubilación
    $anoJubilacion = $anyoActual + (67 - $edad);
    echo "Año de jubilación: $anoJubilacion<br>";

} else {
    echo "Por favor, proporciona la edad como parámetro en la URL, por ejemplo, ?edad=33";
}
?>
