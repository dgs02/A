'use strict';

function getSecondsToAfterTomorrow() {
    const now = new Date(); // Obtener la fecha y hora actual
    const tomorrow = new Date(now);
    tomorrow.setDate(now.getDate() + 2); // Obtener la fecha de pasado mañana
  
    // Calcular la diferencia en milisegundos
    const timeDifference = tomorrow - now;
  
    // Convertir la diferencia a segundos
    const secondsDifference = Math.floor(timeDifference / 1000);
  
    return secondsDifference;
  }
  
  // Ejemplo de uso:
  const secondsToAfterTomorrow = getSecondsToAfterTomorrow();
  console.log(secondsToAfterTomorrow);
  