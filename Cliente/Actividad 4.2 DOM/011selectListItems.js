'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const itemList = document.getElementById('itemList');
    const items = itemList.getElementsByTagName('li');

    itemList.addEventListener('click', function(event) {
        const clickedItem = event.target;

        // Verificar si Ctrl/Cmd está presionado
        const isCtrlPressed = event.ctrlKey || event.metaKey;

        // Deseleccionar todos los elementos si Ctrl no está presionado
        if (!isCtrlPressed) {
            for (const item of items) {
                item.classList.remove('selected');
            }
        }

        // Cambiar el estado de selección para el elemento clicado
        clickedItem.classList.toggle('selected');
    });
});
