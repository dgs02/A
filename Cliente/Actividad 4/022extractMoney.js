'use strict';

function extractCurrencyValue(str) {
    // Utiliza parseInt para extraer el valor numérico
    // y elimina el signo de dólar usando substr
    const numericValue = parseInt(str.substr(1), 10);
    return numericValue;
  }
  
  // Ejemplo de uso:
  const value = extractCurrencyValue('$120');
  console.log(value); // Debería mostrar 120 en la consola

  