'use strict';

function getWeekDay(date) {
    const daysOfWeek = ['SU', 'MO', 'TU', 'WE', 'TH', 'FR', 'SA'];
    const dayIndex = date.getDay();
    return daysOfWeek[dayIndex];
  }
  
  let date = new Date(2012, 0, 3); // 3 Jan 2012
  alert(getWeekDay(date)); // Debería mostrar "TU"
  