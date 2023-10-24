"use strict";

// declaramos nuestra funcion que nos preguntara en la web
let ask = (question, yes, no) => {
    if (confirm(question)) yes();
    else no();
  };
  
  ask(
    "Do you agree?",
    () => { alert("You agreed."); },
    () => { alert("You canceled the execution."); }
  );
  