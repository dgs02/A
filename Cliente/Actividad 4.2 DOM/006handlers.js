'use strict';

button.addEventListener("click", () => alert("1"));
button.removeEventListener("click", () => alert("1"));
button.onclick = () => alert(2);

/*al hacer clic en el botón, se ejecutará el último handler asignado al evento click.
 En este caso, mostrará una alerta con el texto "2". La alerta "1" no se mostrará porque
  se intentó remover el event listener que la mostraría antes de hacer clic en el botón.*/ 