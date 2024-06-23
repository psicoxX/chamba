<?php

$server = "localhost";
$usuario = "root";
$contraseña = "";
$puerto = "3306";
$base = "nigger";

try{

    $pdo= new PDO("mysql:host=$server; dbname=$baseD; port=$puerto", $usuario, $contraseña);
    $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    
    $stmt = $pdo->prepare("SELECT * FROM `perfiles` WHERE CorreElectronico = ?");
    $stmt->execute([$correo]);
    $usuario_existente = $stmt->fetch();
    
    if ($usuario_existente) {
    
    echo "<script>";  
    echo "alert('El correo electrónico ya está registrado.')";
    echo "</script>";
    
    echo "Regresa a la pagina <a href='login.php'><button>aqui</button></a>;";

    } else {
    
    $stmt = $pdo->prepare("INSERT INTO `login (CorreElectronico, Contraseña) VALUES (?, ?)");
    $stmt->execute([$correo, $contraseña]); 
    echo "Registro exitoso. Puedes iniciar sesión <a href='login.php'>aqui</a>.";
    
    }

}



catch (PDOException $e){
    echo "Error al iniciar sesión: ". $e->getMessage(); 
}