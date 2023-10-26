'use strict';

function getLocalDay(date) {
    let day = date.getDay();
    if (day === 0) {
      day = 7; // El domingo se considera el día 7 en la convención europea
    }
    return day;
  }
  
  function getSpanishWeekDay(date) {
    const spanishDays = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
    const localDay = getLocalDay(date);
    return spanishDays[localDay - 1];
  }
  
  let date = new Date(2012, 0, 3); // 3 Jan 2012
  alert(getSpanishWeekDay(date)); // Debería mostrar "martes"
  