'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const editableDiv = document.getElementById('editableDiv');

    editableDiv.addEventListener('click', function() {
        editContent();
    });

    editableDiv.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            editContent();
        }
    });

    editableDiv.addEventListener('blur', function() {
        editContent();
    });

    function editContent() {
        if (editableDiv.classList.contains('editing')) {
            // Si está en modo de edición, vuelve a ser un div y actualiza su contenido
            editableDiv.innerHTML = editableDiv.querySelector('textarea').value;
            editableDiv.classList.remove('editing');
        } else {
            // Si no está en modo de edición, conviértelo en un textarea
            const textarea = document.createElement('textarea');
            textarea.value = editableDiv.innerHTML;
            editableDiv.innerHTML = '';
            editableDiv.appendChild(textarea);
            textarea.focus();
            editableDiv.classList.add('editing');
        }
    }
});
