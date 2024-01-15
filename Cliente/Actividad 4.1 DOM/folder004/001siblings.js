'use strict';

// Obtener el elemento 'elem'
var elem = document.getElementById('elem');

// Verificar si elem.lastChild.nextSibling siempre es null
console.log("elem.lastChild.nextSibling es:", elem.lastChild.nextSibling); // debería ser null

// Verificar si elem.children[0].previousSibling siempre es null
console.log("elem.children[0].previousSibling es:", elem.children[0].previousSibling); // debería ser null