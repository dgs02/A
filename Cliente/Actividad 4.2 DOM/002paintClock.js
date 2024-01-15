'use strict';

let intervalId;
let hours = 0;
let minutes = 0;
let seconds = 0;

function startClock() {
    intervalId = setInterval(updateClock, 1000);
}

function stopClock() {
    clearInterval(intervalId);
}

function updateClock() {
    seconds++;
    if (seconds === 60) {
        seconds = 0;
        minutes++;
        if (minutes === 60) {
            minutes = 0;
            hours++;
            if (hours === 24) {
                hours = 0;
            }
        }
    }

    document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
    document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
    document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
}

// Llamada inicial
updateClock();
