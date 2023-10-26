'use strict';

function getLastDayOfMonth(year, month) {
    const date = new Date(year, month + 1, 0);
    return date.getDate();
  }
  
  // Ejemplo de uso:
  const lastDay = getLastDayOfMonth(2012, 1); // 29 (febrero, año bisiesto)
  console.log(lastDay);
  