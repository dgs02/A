'use strict';

let thor = "Thor es el hijo de Odín";

// Largo de la cadena
console.log(thor.length); // Debería mostrar 21

// Encontrar la letra 'o'
console.log(thor.indexOf('o')); // Debería mostrar 1 (la primera 'o' se encuentra en la posición 1)

// Encontrar el carácter que ocupa la posición 3
console.log(thor.charAt(3)); // Debería mostrar 'r' (la letra en la posición 3)

// ¿Qué carácter ocupa la posición 1?
console.log(thor.charAt(1)); // Debería mostrar 'h' (la letra en la posición 1)

// Trocea la cadena usando los espacios en blanco
console.log(thor.split(' ')); // Debería mostrar ["Thor", "es", "el", "hijo", "de", "Odín"]

// Reemplaza 'Thor' por 'Loki'
const replacedThor = thor.replace('Thor', 'Loki');
console.log(replacedThor); // Debería mostrar "Loki es el hijo de Odín"

// Recorta la cadena para que devuelva la palabra 'Odín'
const odin = thor.substring(thor.indexOf('Odín'));
console.log(odin); // Debería mostrar "Odín"

// ¿Puedes encontrar la letra 'a'? Demuéstralo
console.log(thor.indexOf('a')); // Debería mostrar 13 (la 'a' se encuentra en la posición 13)

// Pon la mitad de la cadena en minúsculas (sin usar las posiciones de 0 a 11)
const firstHalf = thor.substring(0, 11);
const secondHalf = thor.substring(11);
const modifiedThor = firstHalf + secondHalf.toLowerCase();
console.log(modifiedThor); // Debería mostrar "Thor es el hijo de odín"
