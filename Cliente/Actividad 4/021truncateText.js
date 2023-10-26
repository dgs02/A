'use strict';

function truncate(str, maxlength) {
    if (str.length <= maxlength) {
      return str; // La cadena ya es lo suficientemente corta
    }
  
    // Resta 3 para dejar espacio para los puntos suspensivos
    const truncatedStr = str.slice(0, maxlength - 3) + '...';
    return truncatedStr;
  }
  
  // Ejemplos de uso:
  console.log(truncate("Lo que me gustaría contar sobre este tema es:", 20)); // "Lo que me gustaría c…"
  console.log(truncate("Hola a todos!", 20)); // "Hola a todos!"
  