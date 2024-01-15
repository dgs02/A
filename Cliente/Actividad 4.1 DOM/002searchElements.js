'use strict';

 // Encontrar la tabla con id="age-table"
 var ageTable = document.getElementById('age-table');
 console.log('Tabla con id="age-table":', ageTable);

 // Encontrar todos los elementos label dentro de la tabla
 var labelsInTable = ageTable.querySelectorAll('label');
 console.log('Elementos label dentro de la tabla:', labelsInTable);

 // Encontrar el primer td en la tabla con la palabra "age"
 var firstTdWithAge = ageTable.querySelector('td:contains("Age")');
 console.log('Primer td en la tabla con la palabra "age":', firstTdWithAge);

 // Encontrar el formulario con name="search"
 var searchForm = document.forms['search'];
 console.log('Formulario con name="search":', searchForm);

 // Encontrar el primer input en ese formulario
 var firstInputInSearchForm = searchForm.querySelector('input');
 console.log('Primer input en el formulario:', firstInputInSearchForm);

 // Encontrar el último input en ese formulario
 var inputsInSearchForm = searchForm.querySelectorAll('input');
 var lastInputInSearchForm = inputsInSearchForm[inputsInSearchForm.length - 1];
 console.log('Último input en el formulario:', lastInputInSearchForm);