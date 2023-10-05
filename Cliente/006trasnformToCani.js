function transformarTexto() {
    const inputTexto = document.getElementById("inputTexto");
    const resultado = document.getElementById("resultado");
  
    if (!inputTexto.value) {
      resultado.innerText = "Por favor, ingresa una cadena de texto.";
      return;
    }
  
    const cadenaOriginal = inputTexto.value;
    const cadenaTransformada = transformToCani(cadenaOriginal);
    resultado.innerText = "Texto transformado: " + cadenaTransformada;
  }
  
  function transformToCani(cadena) {
    let resultado = '';
    let mayusculas = true; // Empezar con mayúsculas
  
    for (let i = 0; i < cadena.length; i++) {
      const letra = cadena[i];
  
      // Alternar entre mayúsculas y minúsculas
      if (letra.match(/[a-zA-Z]/)) {
        if (mayusculas) {
          resultado += letra.toUpperCase();
          mayusculas = false;
        } else {
          resultado += letra.toLowerCase();
          mayusculas = true;
        }
      } else if (letra === 'c' || letra === 'C') {
        resultado += 'K';
      } else {
        resultado += letra;
      }
    }
  
    // Añadir tres letras 'H' al final
    resultado += 'HHH';
  
    return resultado;
  }
  