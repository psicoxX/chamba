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

    $stmt = $pdo->prepare("SELECT * FROM perfiles WHERE correo = ?");
    $stmt->execute([$correo]);
    $usuario_existente = $stmt->fetch();

    if ($usuario_existente) {
        echo"<script>";
        echo "alert('El correo electrónico ya está registrado.')";
       echo "</script>";
        
       
    } else {
        $stmt = $pdo->prepare("INSERT INTO perfiles (correo, contrasena) VALUES (?, ?)");
        $stmt->execute([$correo, $contraseña]);
        echo "Registro exitoso. Puedes iniciar sesión <a href='../index.php'>aquí</a>.";
    }

} catch (PDOException $e) {
    echo "Error al registrar usuario: " . $e->getMessage();
}

?>
