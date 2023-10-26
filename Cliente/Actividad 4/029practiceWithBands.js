'use strict';

var grupos = [
    { nombre: "ACDC", genero: "Rock" },
    { nombre: "Cold Play", genero: "Pop" },
    { nombre: "NCT Dream", genero: "K-Pop" },
    { nombre: "Metallica", genero: "Heavy Metal" }
  ];
  
  // 1. Filtrar grupos de música Rock
  var gruposRock = grupos.filter(grupo => grupo.genero === "Rock");
  console.log("Grupos de Rock:");
  console.log(gruposRock);
  
  // 2. Encontrar el grupo de música K-Pop
  var grupoKPop = grupos.find(grupo => grupo.genero === "K-Pop");
  console.log("Grupo de K-Pop:");
  console.log(grupoKPop);
  
  // 3. Transformar el array de grupos en un array de nombres
  var nombresGrupos = grupos.map(grupo => grupo.nombre);
  console.log("Nombres de Grupos:");
  console.log(nombresGrupos);
  
  // 4. Reducir el array a un objeto que cuente cuántos grupos hay en cada género
  var gruposPorGenero = grupos.reduce((acumulador, grupo) => {
    acumulador[grupo.genero] = (acumulador[grupo.genero] || 0) + 1;
    return acumulador;
  }, {});
  console.log("Grupos por Género:");
  console.log(gruposPorGenero);
  