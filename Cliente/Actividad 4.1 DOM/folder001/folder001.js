'use strict';

// Parte 4.1 - Ejercicio Folder001

// 001-Usando childNodes, selecciona y muestra en la consola todos los nodos hijos del div con id contenedor.
console.log(document.getElementById('contenedor').childNodes);

// 002-Usando firstChild, selecciona y muestra en la consola el primer hijo del div con id contenedor.
console.log(document.getElementById('contenedor').firstChild);

// 003-Usando lastChild, selecciona y muestra en la consola el último hijo del div con id contenedor.
console.log(document.getElementById('contenedor').lastChild);

// 004-Usando parentElement, selecciona y muestra en la consola el elemento padre del h1.
console.log(document.querySelector('h1').parentElement);

// 005-Usando children, selecciona y muestra en la consola todos los elementos hijos de la lista desordenada (ul).
console.log(document.querySelector('ul').children);

// 006-Usando firstElementChild, selecciona y muestra en la consola el primer elemento hijo del div con id contenedor.
console.log(document.getElementById('contenedor').firstElementChild);

// 007-Usando lastElementChild, selecciona y muestra en la consola el último elemento hijo del div con id contenedor.
console.log(document.getElementById('contenedor').lastElementChild);

// 008-Usando previousElementSibling, selecciona y muestra en la consola el elemento anterior al párrafo con clase parrafo.
console.log(document.querySelector('.parrafo').previousElementSibling);

// 009-Usando nextElementSibling, selecciona y muestra en la consola el elemento siguiente al párrafo con clase parrafo.
console.log(document.querySelector('.parrafo').nextElementSibling);

// 010-Usando JavaScript, selecciona el primer elemento li dentro de la lista y muestra en la consola su nodeType, nodeName y tagName.
var primerLi = document.querySelector('li');
console.log("NodeType:", primerLi.nodeType, " NodeName:", primerLi.nodeName, " TagName:", primerLi.tagName);

// 011-Usando JavaScript, selecciona el enlace (<a>) y muestra en la consola su innerHTML y outerHTML.
var enlace = document.querySelector('a');
console.log("InnerHTML:", enlace.innerHTML, " OuterHTML:", enlace.outerHTML);

// 012-Usando JavaScript, selecciona el párrafo con clase parrafo y muestra en la consola su nodeValue y textContent.
var parrafo = document.querySelector('.parrafo');
console.log("NodeValue:", parrafo.nodeValue, " TextContent:", parrafo.textContent);

// 013-Usando JavaScript, selecciona el div con id contenedor y verifica si tiene el atributo hidden. Si lo tiene, imprime en la consola "El elemento está oculto", de lo contrario, imprime "El elemento no está oculto".
var contenedor = document.getElementById('contenedor');
if (contenedor.hasAttribute('hidden')) {
    console.log("El elemento está oculto");
} else {
    console.log("El elemento no está oculto");
}
