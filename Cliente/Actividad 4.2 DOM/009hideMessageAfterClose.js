'use strict';
document.addEventListener('DOMContentLoaded', function() {
    const messageList = document.getElementById('messageList');
    const messages = messageList.getElementsByTagName('li');

    for (const message of messages) {
        const closeButton = document.createElement('button');
        closeButton.textContent = 'Cerrar';
        closeButton.classList.add('closeButton');

        closeButton.addEventListener('click', function() {
            // Eliminar el mensaje al hacer clic en el botón de cierre
            message.remove();
        });

        message.appendChild(closeButton);
    }
});
