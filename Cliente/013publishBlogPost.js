"use strict";

// Declaramos nuestra funcion flecha 
let publicarBlog= (titulo, contenido, etiquetas) =>{
    // Declaramos los casos
    if(etiquetas === undefined ){
        // retornamos los datos
        return [titulo, contenido]
    }
    else{
        // retornamos los datos
        return [titulo, contenido, etiquetas]
    }
}

//Hacemo la comprobación
document.write(publicarBlog("hola ", "holabuenas ", 5) + "<br>");
document.write(publicarBlog("Adios ", "Adios buenas"));