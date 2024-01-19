import * as bootstrap from 'bootstrap';


// Función para obtener el año actual
function obtenerAnioActual() {
    var fecha = new Date();
    return fecha.getFullYear();
}

// Función para cambiar el año en el footer
function cambiarAnioFooter() {
    var elementoAnio = document.getElementById('anio-footer');
    if (elementoAnio) {
        elementoAnio.textContent = obtenerAnioActual();
    }
}

// Llama a la función al cargar la página
window.onload = cambiarAnioFooter;


// Función para realizar cambios en el contenido al presionar el botón
function cambiarContenido() {
    // Ejemplo de cambio: actualiza el texto del primer párrafo en el bloque de información
    var parrafo = document.querySelector('.col-md-6 p');
    if (parrafo) {
        parrafo.textContent = "Pulsa en la esquina superior derecha el boton de Login o Register para acceder y poder crear tus propios pokemons!";
    }
}

// Asigna la función al evento click del botón
document.getElementById('cambiarContenidoBtn').addEventListener('click', cambiarContenido);
