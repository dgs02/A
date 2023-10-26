'use strict';

function checkSpam(str) {
    // Convertimos la cadena de entrada a minúsculas para hacer la búsqueda insensible a mayúsculas y minúsculas
    const lowerCaseStr = str.toLowerCase();
    
    // Verificamos si la cadena contiene "viagra" o "xxx"
    if (lowerCaseStr.includes('viagra') || lowerCaseStr.includes('xxx')) {
      return true;
    }
    
    // Si no contiene ninguna de las palabras, retornamos false
    return false;
  }
  
  // Ejemplos de uso:
  console.log(checkSpam('compra ViAgRA ahora'));  // Devuelve true
  console.log(checkSpam('xxxxx gratis'));         // Devuelve true
  console.log(checkSpam("coneja inocente"));     // Devuelve false

  