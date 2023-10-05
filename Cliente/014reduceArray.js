"use strict";

// Declaramos nuestra funcion flecha
let reduceArray =(array) =>{
    //Usamos el metodo reduce y le pasamos la condicion para que sume los numeros
    return array.reduce((num1, num2) => num1 +num2)
}

// comprobamos por pantalla
document.write(reduceArray([6, 5, 4, 8, 5, 8, 4, 8, 5, 8, 4]))