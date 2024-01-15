'use strict';


function countDescendants(li) {
    // Obtener el texto dentro del <li>
    const text = li.firstChild.nodeValue.trim();
    
    // Obtener el número de <li> anidados
    const descendantCount = li.querySelectorAll('li').length;

    // Mostrar los resultados en la consola
    console.log(`Texto: ${text}, Número de descendientes: ${descendantCount}`);

    // Iterar sobre los descendientes y llamar recursivamente a la función
    const descendants = li.querySelectorAll('li');
    descendants.forEach(descendant => {
        countDescendants(descendant);
    });
}

// Obtener el elemento raíz
const rootElement = document.getElementById('tree');

// Llamar a la función para el elemento raíz
countDescendants(rootElement.firstChild);