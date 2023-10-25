'use strict';

function readNumber() {
    while (true) {
      const input = prompt("Ingresa un número:");
      
      if (input === null || input === "") {
        return null; // El usuario presionó "CANCEL" o ingresó una línea vacía
      }
      
      const number = Number(input);
      
      if (!isNaN(number)) {
        return number; // El valor es un número válido
      }
      
      alert("Por favor, ingresa un número válido.");
    }
  }
  
  const numeroIngresado = readNumber();
  
  if (numeroIngresado !== null) {
    console.log(`El número ingresado es: ${numeroIngresado}`);
  } else {
    console.log("El usuario canceló el ingreso o ingresó una línea vacía.");
  }
  