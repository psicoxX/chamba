


<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "registro";

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error al conectar: " . $conexion->connect_error);
    
}

// Capturar datos del formulario
$user = $_POST['user'];
$password = $_POST['password'];

// Insertar datos en la tabla
$sql = "INSERT INTO usuarios (user,) VALUES ('$user', '$password')";
if ($conexion->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar: " . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>

