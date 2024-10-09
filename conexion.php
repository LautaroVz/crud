<?php

// conexion con la BD

$servername = "localhost";
$username = "root";
$password = "";

$dbname = "bd_proyecto_informatico";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>