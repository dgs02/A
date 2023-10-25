'use strict';

let ladder = {
    step: 0,
    up() {
    this.step++;
    },
    down() {
    this.step--;
    },
    showStep: function() { // muestra el peldaño actual
    alert( this.step );
    }
    };