<?php

session_start();

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
    
    $stmt = $pdo->prepare("SELECT * FROM `perfiles` WHERE correo = ? AND contrasena = ?");
    $stmt->execute([$correo, $contraseña]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        $_SESSION['correo'] = $correo;
        echo "Inicio de sesión exitoso. Bienvenido, $correo.";
        echo "Ingresa a la pagina <a href='../index.php'><button>aqui</button></a>;";
    } else {
        echo "<script>";
        echo "alert('El correo electrónico o contraseña estan mal.')";
        echo "</script>";
        
        echo "Regresa a la pagina <a href='formlog.php'><button>aqui</button></a>;";
    }

} catch (PDOException $e) {
    echo "Error al iniciar sesión: " . $e->getMessage();
}

?>