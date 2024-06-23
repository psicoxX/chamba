<?php
$servername = "localhost";
$username = "root";
$password = "Risa1129";
$dbname = "mi";
$puerto = "3306";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;port=$puerto", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $Nombre = $_POST['name'];
    $Corre = $_POST['correo'];
    
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $arch = $_FILES['archivo']['name'];
    $ruta_archivo = 'C:\xampp\htdocs\ProyectoSauledu\imagenes y logos' . $arch; 

        move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_archivo);
    } else {
        $arch = null; 
        $ruta_archivo = null;
    }

    $sql = "INSERT INTO `productos` (nombre, Correo, imagen, Fecha_hora) VALUES (?, ?, ?, NOW())";
    $agg = $pdo->prepare($sql);
    $agg->execute([$Nombre, $Corre, $ruta_archivo]);

    echo "Agregado exitosamente";

    header("Location: aggProducto.php");
    exit();

} catch (PDOException $e) {
    echo "Error al insertar el registro: " . $e->getMessage();
}
?>