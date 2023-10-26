'use strict';

function camelize(str) {
    // Dividir la cadena en un array utilizando el guion bajo como separador
    const words = str.split('_');
  
    // Convertir cada palabra en el array a camelCase
    for (let i = 1; i < words.length; i++) {
      words[i] = words[i][0].toUpperCase() + words[i].slice(1);
    }
  
    // Unir las palabras en un solo string
    const camelizedStr = words.join('');
  
    return camelizedStr;
  }
  
  // Ejemplos de uso:
  console.log(camelize("background_color")); // Debería mostrar 'backgroundColor'
  console.log(camelize("list_style_image")); // Debería mostrar 'listStyleImage'
  console.log(camelize("_webkit_transition")); // Debería mostrar 'WebkitTransition'
  