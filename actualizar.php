<?php
include("conexion.php");
// $con = conexion();

// $id= $_GET['id'];

// esto es para que nos traiga el usuario que nosotros estamos queriendo editar.
// $sql= "SELECT * FROM usuarios WHERE id='$id'";
// $query= mysqli_query($con, $sql);
// $row = mysqli_fetch_array($query);
// $id = $_GET['id'];
// $sql = "SELECT * FROM usuarios WHERE id=$id";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();

// codigo que esta aca arriba no sirve


$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

// Actualizar los datos en la base de datos
$sql = "UPDATE usuarios_crud SET nombre = '$nombre', apellido = '$apellido', email = '$email' WHERE id = '$id'";

// Ejecutar la consulta y verificar si fue exitosa
if ($conn->query($sql) === TRUE) {
    header("Location: index_crud.php");  // Redirigir de nuevo a la página principal
    exit();
} else {
    echo "Error actualizando registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>

