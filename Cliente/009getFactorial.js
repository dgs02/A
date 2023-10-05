"use strict";
// declaramos la funcion flecha
let Factorial = (n) => {
    if (n === 0 || n === 1) {
      return 1;
    } else {
      factorial = 1;
      for (i = 2; i <= n; i++) {
        factorial *= i;
      }
      return factorial;
    }
  };
  
// Ejemplo que probaremos
  numero = 8;
  factorial = getFactorial(numero);
  document.write(`El factorial de ${numero} es ${factorial}`);

