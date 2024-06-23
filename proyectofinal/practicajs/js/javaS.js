var Text = "Elan";

var Number = 23;

var Boolean = true;

var NotDefined;

document.write(typeof Text+"<br>"); document.write(typeof Number+"<br>"); document.write(typeof Boolean+"<br>"); document.write(typeof NotDefined+"<br>");

document.write(Text.constructor.name+"<br>");

document.write(Number.constructor.name+"<br>"); document.write(Boolean.constructor.name+"<br>");

// document.write(NotDefined.constructor.name);

// function nombre (p1, p2) {

// }

// var nombre = function(p1, p2){

// }

// new function(p1, p2..., code);

function saludar(){ return "Hola+<br>";

}

saludar();

typeof saludar;
const saludo = function saludar(){

    31
    
    return "Hola+<br>";
    

    
    }
    
    
    saludo();
    
    
    // const saludar = new Function("return 'Hola';");
    
    // saludar();
    
    
    const salud = function(){
    
    
    return "Hola+<br>";
    };
    
    
    salud; salud();
const fB = function() {
    console.log("Funcion B ejecutada");
};
const fError = function () {
    console.error("Error");
};
const fA = function(callback, callbackError) {
    const n = ~~(Math.random() * 5);
    if (n > 2) callback();
    else callbackError();
};
fA(fB, fError);