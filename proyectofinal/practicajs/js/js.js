var text = "Hola, me llamo Manz";
var number = 42;
var boolean = true;
var notDefined;   // undefined

document.write(typeof text);       // "String"
document.write(typeof number);     // "Number"
document.write(typeof boolean);    // "Boolean"
document.write(typeof notDefined); // undefined

document.write(text.constructor.name);       // String
document.write(number.constructor.name);     // Number
document.write(boolean.constructor.name);    // Boolean
document.writeg(notDefined.constructor.name); // ERROR, sólo funciona con variables definidas

function saludar() {
    return "Hola";
  }
  
  saludar(); // 'Hola'
  typeof saludar; // 'function'

  // Función anónima "saludo"
const saludo = function () {
    return "Hola";
  };
  
  saludo; // ƒ () { return 'Hola'; }
  saludo(); // 'Hola'


  // fB = Función B (callback)
const fB = function () {
  console.log("Función B ejecutada.");
};

// fError = Función Error (callback)
const fError = function () {
  console.error("Error");
};

// fA = Función A
const fA = function (callback, callbackError) {
  const n = ~~(Math.random() * 5);
  if (n > 2) callback();
  else callbackError();
};

fA(fB, fError); // Si ejecutamos varias veces, algunas darán error y otras no

function send(event) {
  location.href = "../js.js"
  
}