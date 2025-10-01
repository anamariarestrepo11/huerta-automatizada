<?php
// Configuración de la conexión
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "prueba";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $dbname, 3306);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Opcional: confirmar que la conexión fue exitosa
// echo "Conexión exitosa";
?>