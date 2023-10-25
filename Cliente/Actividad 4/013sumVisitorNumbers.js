'use strict';


    // Pedimos al visitante que ingrese el primer número
    let input1 = prompt("Ingresa el primer número:");
        
    // Convertimos la entrada en un número de punto flotante
    let number1 = parseFloat(input1);

    // Pedimos al visitante que ingrese el segundo número
    let input2 = prompt("Ingresa el segundo número:");

    // Convertimos la segunda entrada en un número de punto flotante
    let number2 = parseFloat(input2);

    // Calculamos la suma de los dos números
    let suma = number1 + number2;

    // Mostramos el resultado al visitante
    alert("La suma de " + number1 + " y " + number2 + " es " + suma);
