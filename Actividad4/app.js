'use strict';

document.addEventListener('DOMContentLoaded', function () {
    // Obtener todos los títulos y divs del acordeón
    var titulos = document.querySelectorAll('#informacion .accordion h3');
    var contenidos = document.querySelectorAll('#informacion .accordion div');

    // Agregar evento clic a cada título
    titulos.forEach(function (titulo, index) {
      titulo.addEventListener('click', function () {
        // Ocultar todos los divs
        contenidos.forEach(function (contenido) {
          contenido.style.display = 'none';
        });

        // Mostrar el div correspondiente al título clicado
        contenidos[index].style.display = 'block';
      });
    });

    // Evento de mouseover/mouseleave para la imagen de la oficina
    var officeImage = document.getElementById('office-image');
    var officeImg = officeImage.querySelector('img');
    var officeText = officeImage.querySelector('p');

    officeImage.addEventListener('mouseover', function () {
      officeImg.style.opacity = 0.7;
      officeText.style.display = 'block';
    });

    officeImage.addEventListener('mouseleave', function () {
      officeImg.style.opacity = 1;
      officeText.style.display = 'none';
    });
  });

  // Activar la validación de Bootstrap en el formulario
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Selecciona el formulario y aplica la validación de Bootstrap
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();