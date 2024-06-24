<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$puerto = "3306";
$baseD = "nigger";



try {
    $pdo = new PDO("mysql:host=$server;dbname=$baseD;port=$puerto", $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $correo = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];
    //PERFILES ES LA TABLA Y SELECCIONA LA PRIMERA COLUMNA QUE SALE
//GENERALMETE ES ID DESPUES CORREO Y SEGUIDO DE PASSWORS
//EN ESTE CASO MI PRIMER COLUMNA ES EL CORREO
//AQJU LO QUE HACEMOS ES PREPARAR LA BASE Y BUSCAR EN LA TABLA LLAMADA PERFILES
//PARA DESPUES BUSCAR LAS COLUMNAS MI CASO EL ORDEN ES //CORREO Y DESPUES CONTRASEÑA
// PERFILES TABLA CORREO COLUMNA
    $stmt = $pdo->prepare("SELECT * FROM perfiles WHERE correo = ?");
    $stmt->execute([$correo]);
    $usuario_existente = $stmt->fetch();

    if ($usuario_existente) {
        echo"<script>";
        echo "alert('El correo electrónico ya está registrado.')";
       echo "</script>";
        
       
    } else {



//AQUI INSERTAMOS LOS VALORES EN EL ORDEN QUE TENEMOS NUESTRAS COLUMNAS 
//INSERTA EN LA TABLA PERFILES Y BUSCA LAS COLUMNAS CORREI Y CONTRASEÑA

        $stmt = $pdo->prepare("INSERT INTO perfiles (correo, contrasena) VALUES (?, ?)");
        $stmt->execute([$correo, $contraseña]);
        echo "Registro exitoso. Puedes iniciar sesión <a href='../index.php'>aquí</a>.";
    }

} catch (PDOException $e) {
    echo "Error al registrar usuario: " . $e->getMessage();
}

//ENTONCES RECAPITULANDO
//MI BASE SE LLAMA NIGGER
//MI TABLA SE LLAMA PERFILES Y ES DE DONDE VOY AMANDAR MIS REGISTROS
//MI PRIMERA COLUMNA ES CORREO/USUARIO
//Y SERÍA MI PRIMER COLUMNA ID LUEGO CORREO Y //SEGUIDO DE CONTRASEÑA


?>
