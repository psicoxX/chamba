<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputTexto = $_POST['inputTexto'];
    $contra= $_POST['contrasena'];
    
    // Validar que solo contiene caracteres permitidos
    if (preg_match("/^[a-zA-Z0-9]*$/", $inputTexto)) {
        echo "Entrada válida: " . htmlspecialchars($inputTexto);
        echo  " Contrasena : ". $contra;
    } else {
        echo "Entrada no válida.";
    }
}
?>
