<?php
// Conexion/user.php
require 'Conexion/Config.php'; // Incluir la conexión a la base de datos
// Verificar si la sesión está activa
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    
    // Preparar y ejecutar la consulta para obtener los datos del usuario
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    
    // Verificar si se obtuvo un resultado
    if ($result) {
        $row = mysqli_fetch_assoc($result); // Guardar los datos del usuario en la variable $row
    } else {
        // Si la consulta falla, manejar el error
        die("Error al obtener los datos del usuario.");
    }
} else {
    // Si no hay sesión activa, redirigir al login
    header("Location: Login.php");
}
?>
