"use strict";

function temporizador(min, seg) {
  const interval = setInterval(function() {
    if (min === 0 && seg === 0) {
      clearInterval(interval); // Detener el temporizador cuando llega a cero
      document.write("Tiempo terminado");
    } else {
      if (seg === 0) {
        min--;
        seg = 59;
      } else {
        seg--;
      }
      document.write("tiempo restante:" + min +":"+seg + "<br>");
    }
  }, 1000);
}

temporizador(5, 20);
