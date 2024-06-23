
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de entrada</title>
   
</head>
<body>
    <form action="valoid.php" method="post">
        <label for="inputTexto">Entrada de texto:</label>
        <input type="text" id="inputTexto" name="inputTexto" onkeypress="bloquearCaracteres(event)" onkeydown="return /[a-z, A-Z ]/i.test(event.key)">
       



    <label >Contrasena</laabel>
    <input type="password" id="contrasena" name="contrasena" >
    <input type="submit" value="Enviar">
    
    </form>
</body>
</html>




<script>
        function bloquearCaracteres(event) {
            // Aquí puedes especificar los caracteres permitidos
            const caracteresPermitidos = /^[a-zA-Z0-9]*$/;
            const inputChar = String.fromCharCode(event.charCode);

            if (!caracteresPermitidos.test(inputChar)) {
                event.preventDefault();
            }
        }
    </script>
