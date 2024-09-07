<?php
include("conexion.php");
$con = conexion();

// el id deja de ser nulo, porque solo necesitaremos un id en especifico a la vez.
$id = $_POST['id']; 
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];

$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id= '$id'";
$query = mysqli_query($con, $sql);

if($query){
    header("location:index.php");
}
?>