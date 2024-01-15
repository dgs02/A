'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.getElementById('thumbnails');

    thumbnails.addEventListener('click', function(event) {
        if (event.target.classList.contains('thumbnail')) {
            // Cambiar la imagen principal al hacer clic en una miniatura
            mainImage.src = event.target.src;
            mainImage.alt = event.target.alt;
        }
    });
});
