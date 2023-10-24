'use strit';

//creamos el objeto
let user = new Object();

//Agregamos la propiedad name
user = {name: "John Snow"};

//Agregamos la propiedad surname
user = {surname: "Sam Sagaz"};

//Cambiamos el contenido de name
user = {name: "Peter Pan"};

//Eliminamos la propiedad name
delete user.name;

//Mostarmos
alert(user.name);
alert(user.surname);