<?php

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $Usuario = $_POST['usuario'];
    $Clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
    $rol = $_POST['rol_id'];
    //Tengo que fijarme que el usuario que voy a insertar no exista
    // $sql_usuario = "SELECT * FROM registros_login WHERE nombre = '$Usuario'";

    // $result = $conn->query($sql_usuario);

    // if ($result->num_rows > 0) {
    //     echo "<div class='alert alert-danger mt-3'>Usuario ya existente en la base de datos</div>";
    //     exit;
    // }

    $sql = "INSERT INTO registros_login (usuario, clave ,rol_id) VALUES ('$Usuario', '$Clave','$rol')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $conn->error . "</div>";
    }
}