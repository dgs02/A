'use strict';

let calculator = {
    read(val1, val2){
        a=val1,
        b=val2
    },

    sum(){
        resultado = a+b
        return resultado
    },

    mul(){
        resultado = a*b
        return resultado
    }

    };
    calculator.read();
    alert( calculator.sum() );
    alert( calculator.mul() );