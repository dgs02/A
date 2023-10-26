'use strict';

let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
  ];
  
  // Filtrar personajes de la película "Hércules"
  let herculesCharacters = disney.filter((personaje) => personaje.pelicula === "Hércules");
  console.log("Personajes de la película Hércules:");
  console.log(herculesCharacters);
  
  // Encontrar todos los nombres de personajes
  let nombresDePersonajes = disney.map((personaje) => personaje.nombre);
  console.log("Nombres de todos los personajes:");
  console.log(nombresDePersonajes);
  
  // Encontrar todos los nombres de películas
  let nombresDePeliculas = disney.map((personaje) => personaje.pelicula);
  console.log("Nombres de todas las películas:");
  console.log(nombresDePeliculas);
  
  // Reducir la lista a un objeto con personajes por película
  let personajesPorPelicula = disney.reduce((acumulador, personaje) => {
    if (!acumulador[personaje.pelicula]) {
      acumulador[personaje.pelicula] = [];
    }
    acumulador[personaje.pelicula].push(personaje.nombre);
    return acumulador;
  }, {});
  console.log("Personajes por película:");
  console.log(personajesPorPelicula);
  