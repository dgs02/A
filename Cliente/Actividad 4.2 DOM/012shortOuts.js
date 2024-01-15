'use strict';

function runOnKeys(func, ...codes) {
    const pressedKeys = new Set();

    document.addEventListener('keydown', function(event) {
        pressedKeys.add(event.code);

        // Verificar si todas las teclas requeridas están presionadas
        const allKeysPressed = codes.every(code => pressedKeys.has(code));

        if (allKeysPressed) {
            func();
        }
    });

    document.addEventListener('keyup', function(event) {
        pressedKeys.delete(event.code);
    });
}

// Ejemplo de uso
runOnKeys(
    () => alert("¡Estudia ya anda!"),
    "KeyT",
    "KeyQ"
);
