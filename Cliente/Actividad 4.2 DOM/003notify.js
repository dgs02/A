'use strict';

function showNotification(options) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    if (options.className) {
        notification.classList.add(options.className);
    }
    
    notification.innerHTML = options.html || '';

    document.body.appendChild(notification);

    const topPosition = options.top || 0;
    const rightPosition = options.right || 0;

    notification.style.top = `${topPosition}px`;
    notification.style.right = `${rightPosition}px`;

    setTimeout(() => {
        notification.remove();
    }, 1500);
}

// Ejemplo de uso
showNotification({
    top: 10,
    right: 10,
    html: "Hello!",
    className: "welcome"
});
