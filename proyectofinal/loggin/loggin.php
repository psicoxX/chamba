<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./loggin.css">
  <title>Loggin</title>
</head>
<body background="../imagenes y logos/carmentit.webp">
  <p>negros de m,ierfda</p>
  <h5>niggaaaaaaaaaas</h5>
<dialog id="modal" open >  
 <h3>Modal de prueba</h3>
 <H3>Comienza a registrarte</H3>
 <h3>Ya estas registrado-? click aqui<h3> <button>Iniciar sesion</button>


 <form action="../conexionbd/Registro.php" id="formLogin" method="dialog"  >
    <div>    
    <label for=""   > correo</label>
        <input act type="text" id="correo" class="obtener" onkeypress="validarcorreo()" placeholder="E-mail" >
        <span id="correo"></span>
    </div>
    <div>
      <label for="">Numero</label>
		<input type="text" name="numero" id="numero" placeholder="numero" maxlength="13"  oninput="soloNumeros(event)" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)">
		<span id="numero"></span>
    </div>
    <div>
        <button id="btnCerrarModal" onclick="boton()" > Enviar </button>
    </div>
  </form>
 <p>Hola modall</p>
 </dialog>  
  <script src="./loggin.js"></script>
</body>
</html>