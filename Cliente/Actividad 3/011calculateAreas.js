"use strict";
// creamos nuestra funciona a la que le pasaremos los parametros de la figura y los corespondientes
function calcularArea(figura, ...parametros) {
  //creamos un menu para la seleccion de figuras
    switch (figura) {
      case "triangulo":
        if (parametros.length === 2) {
          const [base, altura] = parametros;
          return (base * altura) / 2;
        } else {
          return "No se pueden calcular el área del triángulo sin base y altura.";
        }
        break;
      case "circulo":
        if (parametros.length === 1) {
          const [radio] = parametros;
          return Math.PI * Math.pow(radio, 2);
        } else {
          return "No se puede calcular el área del círculo sin el radio.";
        }
        break;
      case "rectangulo":
        if (parametros.length === 2) {
          const [lado1, lado2] = parametros;
          return lado1 * lado2;
        } else {
          return "No se pueden calcular el área del rectángulo sin ambos lados.";
        }
        break;
      default:
        return "Figura no reconocida. Las opciones son: triangulo, circulo, rectangulo.";
    }
  }
  
  // Ejemplos de uso:
  document.write(calcularArea("triangulo", 5, 8,)+ "<br>");     
  document.write(calcularArea("circulo", 3)+ "<br>");         
  document.write(calcularArea("rectangulo", 4, 6));   
 
  