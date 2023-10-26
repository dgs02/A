'use strict';

let disney = [
    { nombre: "Hércules", pelicula: "Hércules" },
    { nombre: "Megana", pelicula: "Hércules" },
    { nombre: "Hades", pelicula: "Hércules" },
    { nombre: "Campanilla", pelicula: "Peter Pan" },
    { nombre: "Wendy", pelicula: "Peter Pan" }
  ];
  
  // Meter a "Peter Pan" al final del array disney.
  disney.push({ nombre: "Peter Pan", pelicula: "Peter Pan" });
  
  // Pintar el array
  console.log("Array después de agregar a Peter Pan al final:");
  console.log(disney);
  
  // Meter a "El capitán Garfio" al principio del array, no olvides la película.
  disney.unshift({ nombre: "El capitán Garfio", pelicula: "Peter Pan" });
  
  // Meter al cocodrilo detrás del capitán, no olvides la película.
  disney.splice(2, 0, { nombre: "Cocodrilo", pelicula: "Peter Pan" });
  
  // Obtener los personajes de la película "Peter Pan" y mostrarlos uno a uno.
  console.log("Personajes de la película 'Peter Pan':");
  disney.forEach((personaje) => {
    if (personaje.pelicula === "Peter Pan") {
      console.log(personaje.nombre);
    }
  });
  
  // Encontrar el índice de "Campanilla".
  const campanillaIndex = disney.findIndex((personaje) => personaje.nombre === "Campanilla");
  console.log("Índice de Campanilla:", campanillaIndex);
  
  // Buscar al cocodrilo.
  const cocodrilo = disney.find((personaje) => personaje.nombre === "Cocodrilo");
  console.log("Información del Cocodrilo:", cocodrilo);
  
  // Escribe la función shuffle(array) que baraje (reordene de forma aleatoria) los elementos del array.
  function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
  }
  
  // Prueba la función shuffle con una copia del array disney
  const shuffledDisney = [...disney];
  shuffle(shuffledDisney);
  console.log("Array Disney barajeado:");
  console.log(shuffledDisney);
  