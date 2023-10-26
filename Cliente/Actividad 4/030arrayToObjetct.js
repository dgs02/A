'use strict';

function groupById(arr) {
    return arr.reduce((result, item) => {
      result[item.id] = item;
      return result;
    }, {});
  }
  
  // Ejemplo de uso:
  const characters = [
    { id: 1, nombre: "Luke Skywalker", pelicula: "Star Wars" },
    { id: 2, nombre: "Darth Vader", pelicula: "Star Wars" },
    { id: 3, nombre: "Harry Potter", pelicula: "Harry Potter" }
  ];
  
  const charactersById = groupById(characters);
  console.log(charactersById);
  