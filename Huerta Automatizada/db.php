<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "projectdb";

$conn = new mysqli($host, $user, $pass, $dbname, 3306);
if ($conn->connect_error) {
    die("Error de conexion;" . $conn->connect_error);
}
?>