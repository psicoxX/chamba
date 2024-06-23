





function validarCorreo() {
    var email = document.getElementById("correo").value;
    var text = document.getElementById("text");
    var validar = /^[^ ]+[a-z]+\.[a-z]{2,3}$/;

    if (email.match(validar) && email.includes(gmail)) {
        
        Text.innerhtml = "Correo valdo";
        Text.style.color= "red";
        return true;
    }
    else{
        Text.innerhtml="correo invalido";
        Texts.style.color="red";
        return false;
    }
    
}
function boton() {

var email = document.getElementById("correo").value;;
var validar= /^[^ ]+[a-z]+\.[a-z]{2,3}$/;
var text= document.getElementById("text").value;
var mensaje= document.getElementById("mensaje").value;
var numero= document.getElementById("numero").value;




if(email.match(validar) && email.includes(email) && text!== "" && mensaje!=="" && numero!=="")
    {
let text= document.getElementById('text').value;
 let correo =document.getElementById('correo').value;
let mensaje= document.getElementById('mensaje').value;
let numero = document.getElementById('numero').value;

let aguardar=JSON.stringify({text,correo,mensaje,numero});
console.log(aguardar);
alert("su mensaje a sido enviado");
 // Recargar la página
return true; }
else{
    alert("Revisa los datos, algo anda mal");
    return true;
}




}

function validarMensaje() {
    var mensaje = document.getElementById("mensaje").value;
   
    
    miInput.addEventListener("input", function () {
        const valor = mensaje.value;
        const maxCaracteres = 200;
    
        if (valor.length > maxCaracteres) {

          // Si se supera el límite, muestra un mensaje de error
          alert("Has superado el límite de caracteres (200).");
          // También puedes deshabilitar el botón de envío del formulario si lo deseas:
          document.getElementById("inputsubmit").disabled = true;
        } else {
          // Si está dentro del límite, puedes habilitar el botón de envío (si lo deshabilitaste previamente)
           document.getElementById("inputsubmit").disabled = false;
        }
      });
    
}


document.getElementById("text").addEventListener("input", (e) => {
    let value = e.target.value;
    e.target.value = value.replace(/[^A-Za-z]/g, "");
});



    function soloNumeros(e) {
       
        e.target.value = e.target.value.replace(/[^0-9]/g, '');
        
    }
    


    

