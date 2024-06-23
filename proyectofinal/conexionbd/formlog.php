<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <script src="../js/contactanos.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<div class="">
  
  
  <h2 >Log in</h2>

  <form  action="../conexionbd/inicioS.php" id="formLogin" method="post">
  <div>
            <label for="usuario" class="labels">Usuario</label>
            <input type="text" id="usuario" name="usuario" maxlength="25" onkeydown="return /[a-zA-Z]/.test(event.key)" class="inputs" placeholder="Usuario" required>
            <span id="errorUsuario"></span>
        </div>
        <div>
            <label for="contrasena" class="labels">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" maxlength="13" oninput="soloNumeros(event)" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="inputs" required>
            <span id="errorContrasena"></span>
        </div>
        <div>
            <button type="submit" id="btnEnviar" class="botoon" onclick="boton(event)">Enviar</button>
        </div>
  </form>
</div>
</body>
</html>