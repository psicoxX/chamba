<?php 

$server = "localhost";
$usuario = "root";
$contrasena = "";
$puerto = "3306";
$baseD = "nigger";



    try {

        $pdo = new PDO("mysql:host=$server; dbname=$baseD; port=$puerto", $usuario, $contraseña); $     
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);      
        $correo = $_POST['correo'];       
        $contraseña = $_POST['contraseña'];   
        $stmt = $pdo->prepare("SELECT * FROM `login WHERE CorreElectronico ? AND Contraseña?"); 
        $stmt->execute([$correo, $contraseña]); 
        $usuario = $stmt->fetch();

        if ($usuario) { 
        $_SESSION['correo'] = $correo; 
        echo "Inicio de sesión exitoso. Bienvenido, Scorred.";
        
        echo "Ingresa a la pagina <a href='../index.php'><button>aqui</button></a>;";
        
        } else {
        
        echo "<script>";   
        echo "alert('El correo electrónico o contraseña estan mal.')"; 
        echo "</script>";
        echo "Regresa a la pagina <a href='login.php'><button>aqui</button></a>;";
        
        }   

        } catch (PDOException $e) {  
        echo "Error al iniciar sesión: ". $e->getMessage(); 
        }





?>