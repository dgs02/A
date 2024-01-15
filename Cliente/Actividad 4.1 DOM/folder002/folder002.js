'use strict';

// Ejercicio Folder002

// 001 - Usando JavaScript, agrega una nueva fila a la tabla con los siguientes datos: "Pedro", "28", "Colombia".
var tabla = document.getElementById('miTabla');
var nuevaFila = tabla.insertRow();
var datosPedro = ["Pedro", "28", "Colombia"];

for (var i = 0; i < datosPedro.length; i++) {
    var celda = nuevaFila.insertCell(i);
    celda.innerHTML = datosPedro[i];
}

// 002 - Cambia el nombre de "Carlos" a "Juan" y actualiza su edad a "26".
var filaCarlos = tabla.rows[1];
filaCarlos.cells[0].innerHTML = "Juan";
filaCarlos.cells[1].innerHTML = "26";

// 003 - Selecciona y muestra en la consola el nombre de la persona que tiene la edad más alta en la tabla.
var filas = tabla.rows;
var edadMasAlta = 0;
var nombreMasAlto = "";

for (var i = 1; i < filas.length; i++) {
    var edadActual = parseInt(filas[i].cells[1].innerHTML);
    if (edadActual > edadMasAlta) {
        edadMasAlta = edadActual;
        nombreMasAlto = filas[i].cells[0].innerHTML;
    }
}
console.log("Persona con la edad más alta:", nombreMasAlto);

// 004 - Agrega una nueva columna al final de cada fila con el texto "Acción" y dentro de cada celda de esta columna agrega un botón con el texto "Eliminar".
for (var i = 0; i < filas.length; i++) {
    var celdaAccion = filas[i].insertCell(filas[i].cells.length);
    var botonEliminar = document.createElement('button');
    botonEliminar.innerHTML = "Eliminar";
    celdaAccion.appendChild(botonEliminar);
}
