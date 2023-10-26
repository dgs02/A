'use strict';

let fruits = ["Banana", "Manzana", "Fresa"];

// Añadimos "Cereza" al principio
fruits.unshift("Cereza");

// Añadimos "Melocotón" al final
fruits.push("Melocotón");

// Mostrar el array elemento a elemento con for clásico
for (let i = 0; i < fruits.length; i++) {
  console.log(fruits[i]);
}

// Eliminamos el primer elemento
fruits.shift();

// Eliminamos el último elemento
fruits.pop();

// Mostrar cada elemento con un bucle for...of
for (let fruit of fruits) {
  console.log(fruit);
}
