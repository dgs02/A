'use strict';

function randomInteger(min, max) {
    // Usamos Math.floor para redondear hacia abajo y asegurarnos de obtener un número entero.
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }
  
  // Ejemplos de uso
  alert(randomInteger(1, 5)); // Ejemplo 1
  alert(randomInteger(1, 5)); // Ejemplo 2
  alert(randomInteger(1, 5)); // Ejemplo 3
  