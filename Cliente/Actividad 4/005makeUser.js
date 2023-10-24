'use strict';

function makeUser() {
    return {
    name: "John",
    ref: this
    };
    }
    let user = makeUser();
    alert( user.ref.name ); // ¿Cuál es el resultado?

    // EL RESULTADO SEGUN CONLOSA SERIA UNDEFINED