'use strict';

function A() {}
function B() {}

A.prototype = B.prototype;

let a = new A();
let b = new B();

alert(a == b); // true
