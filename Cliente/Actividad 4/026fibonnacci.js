'use strict';

function generarFibonacci(n) {
    const fibonacci = [0, 1];
    for (let i = 2; i < n; i++) {
      const num = fibonacci[i - 1] + fibonacci[i - 2];
      fibonacci.push(num);
    }
    return fibonacci;
  }
  
  const primeros20Fibonacci = generarFibonacci(20);
  console.log(primeros20Fibonacci);
  