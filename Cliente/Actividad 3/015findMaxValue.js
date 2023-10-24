"use strict";
// Declarmos nuestra funcion flecha
let reduceArray =(array) =>{
    // utilizamos nuestro metodo reduce para combinar con el Math y buscar el numero mayor en el array
    return array.reduce((num1, num2) => Math.max(num1, num2))
}

//Probamos por pantalla
document.write(reduceArray([6, 5, 4, 8, 5, 8, 4, 8, 5, 8, 4]))