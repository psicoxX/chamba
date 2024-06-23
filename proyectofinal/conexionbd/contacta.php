<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = "localhost";
$usuario = "root";
$contraseña = "";
$puerto = "3306";
$baseD = "nigger"; // Considera cambiar este nombre a algo más apropiado.

try {
    // Conexión a la base de datos
    $pdo = new PDO("mysql:host=$server;dbname=$baseD;port=$puerto", $usuario, $contraseña);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $nombre = $_POST['Nombre'];
    $correo = $_POST['Correo'];
    $numero = $_POST['NumeroTel'];
    $asunto = $_POST['mensaje'];

    if (!$nombre || !$correo || !$numero || !$asunto) {
        throw new Exception("Todos los campos son obligatorios.");
    }

    // Preparación de la consulta
    $sql = "INSERT INTO contacto (NOMBRE, EMAIL, TELEFONO, MENSAJE, Fecha) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $pdo->prepare($sql);

    // Ejecución de la consulta
    if ($stmt->execute([$nombre, $correo, $numero, $asunto])) {
        header("Location: ../html/contacto.htmlsuccess=true");
       "<script></script>".
        exit();
    } else {
        throw new Exception("Error al ejecutar la consulta.");
    }

} catch (PDOException $e) {
    echo "Error al conectar o insertar en la base de datos: " . $e->getMessage();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
