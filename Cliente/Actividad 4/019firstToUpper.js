'use strict';

function ucFirst(str) {
    // Verificamos si el string es vacío
    if (str.length === 0) {
      return str;
    }
  
    // Capitalizamos la primera letra y concatenamos el resto del string
    return str.charAt(0).toUpperCase() + str.slice(1);
  }
  
  // Ejemplo de uso
  var resultado = ucFirst("john");
  console.log(resultado); // Esto mostrará "John"
  