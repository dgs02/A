'use strict';

var elem = document.getElementById('miElemento');
var text = 'Hola, mundo!';
elem.append(document.createTextNode(text));


var elem = document.getElementById('miElemento');
var text = '<strong>Hola, mundo!</strong>';
elem.innerHTML = text;


var elem = document.getElementById('miElemento');
var text = 'Hola, mundo!';
elem.textContent = text;
