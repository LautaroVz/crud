<?php
include("conexion.php");
$con = conexion();

// el id lo defini nulo porque es autoincrementable en la bd.
$id = null; 
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];

$sql = "INSERT INTO usuarios VALUES ('$id','$nombre','$apellido','$email')";
$query= mysqli_query($con, $sql);

if($query){
    header("location: index.php");
}
?>