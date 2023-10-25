'use strict';

function Calculator() {
    this.a = 0;
    this.b = 0;
    
    this.read = function() {
      this.a = (prompt("Ingrese el primer valor:"));
      this.b = (prompt("Ingrese el segundo valor:"));
    };
    
    this.sum = function() {
      return this.a + this.b;
    };
    
    this.mul = function() {
      return this.a * this.b;
    };
  }
  
  let calculator = new Calculator();
  calculator.read();
  alert("Suma = " + calculator.sum());
  alert("Multiplicación = " + calculator.mul());
  