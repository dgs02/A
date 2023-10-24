'use strict';

let menu = {
    width: 200,
    height: 300,
    title: "Mi menú"
};

function multiplyNumeric(obj) {
     for(let key in obj){
        if(typeof obj[key] == "number"){
            obj[key] = obj[key]*2;

        }
     }
}

multiplyNumeric(menu);

for(let key in menu){
    alert(menu[key])
 }