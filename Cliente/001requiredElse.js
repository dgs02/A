

function checkAge(age) {

    if (age > 18) {
  
      return true;
  
    } else {
  
      /* La funcion comprobara el parametro age y en el caso de ser mayor a 18 
      nos devolvera un true, en el caso de eliminar el else, la funcion responderia
      de la misma manera que si lo incluyesemos*/
  
      return confirm('¿Tus padres te permitieron?');
  
    }
  
  }