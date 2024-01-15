'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const genresSelect = document.getElementById('genres');

    // Mostrar el valor y el texto del option seleccionado
    alert(`Valor seleccionado: ${genresSelect.value}\nTexto seleccionado: ${genresSelect.options[genresSelect.selectedIndex].text}`);

    // Añadir un nuevo option
    const newOption = document.createElement('option');
    newOption.value = 'classic';
    newOption.textContent = 'Classic';
    genresSelect.appendChild(newOption);

    // Seleccionar el nuevo option
    genresSelect.value = 'classic';

    // Mostrar el valor y el texto del nuevo option seleccionado
    alert(`Valor seleccionado después de añadir: ${genresSelect.value}\nTexto seleccionado después de añadir: ${genresSelect.options[genresSelect.selectedIndex].text}`);
});
