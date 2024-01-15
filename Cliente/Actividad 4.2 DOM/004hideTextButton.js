'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const textDiv = document.getElementById('text');
    const hideButton = document.getElementById('hideButton');

    hideButton.addEventListener('click', function() {
        textDiv.style.display = 'none';
    });
});
