"use strict";
// Declaramo la funcion flecha
let filtrarNumeros = (arr) => {
  // hacemos uso del metodo filter para filtrar por numeros que divididos entre dos el resto sea 0
    evenNumbers = arr.filter((number) => number % 2 === 0);
    return evenNumbers;
  };
  
  // Ejemplo de uso:
  numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  numerosPares = filtrarNumeros(numeros);
  document.write(numerosPares);
  