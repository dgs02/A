"use strict";
// Reescribimos la funcion con el operador de signo ?
function checkAge(age) {
    return age > 18 ? true : confirm('¿Tienes permiso de tus padres?');
};

  
// Reescribimos la funcion con OR
function checkAge(age) {
    return age > 18 || confirm('¿Tienes permiso de tus padres?');
};
  
  