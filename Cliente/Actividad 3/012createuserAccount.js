"use strict";

// Nuestra funcion con sus parametros correspondientes
function crearUsuario(nombreUsuario, correo, numeroTelefono){
    //declaramos los dos casos, en el que se omite el telefono y en el completo
    if(numeroTelefono === undefined ){
        //retornamos los datos
        return [nombreUsuario, correo]
    }
    else{
        //retornamos los datos
        return [nombreUsuario, correo, numeroTelefono]
    }
}

// probamos la solucion en la web
document.write(crearUsuario("David ", "gdavid1004 ", 644958756) + "<br>");
document.write(crearUsuario("David ", "gdavid1004 "));