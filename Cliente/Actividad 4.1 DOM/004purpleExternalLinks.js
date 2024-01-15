'use strict';

 // Obtener todos los enlaces en la página
 var links = document.getElementsByTagName('a');

 // Iterar sobre los enlaces
 for (var i = 0; i < links.length; i++) {
     // Verificar si el enlace es externo
     if (isExternalLink(links[i])) {
         // Cambiar el color del enlace a púrpura
         links[i].style.color = 'purple';
     }
 }

 // Función para verificar si un enlace es externo
 function isExternalLink(link) {
     var href = link.getAttribute('href');

     // Verificar si el href tiene ://
     if (href && href.indexOf('://') !== -1) {
         // Verificar si no comienza con http://internal.com
         if (href.indexOf('http://internal.com') !== 0) {
             return true; // Es un enlace externo
         }
     }

     return false; // No es un enlace externo
 }