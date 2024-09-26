<?php
include("conexion.php");


// el id lo defini nulo porque es autoincrementable en la bd.

$id = null; 
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];

$sql = "INSERT INTO usuarios VALUES ('$id','$nombre','$apellido','$email')";

// $query= query($sql);

// if($query){
//     header("location: index2.php");
// }

if ($conn->query($sql) === TRUE) {
    header("Location: index2.php");
    exit();    } else {
    echo "<div class='alert alert-danger'>Error actualizando registro: " . $conn->error . "</div>";
}
$conn->close();

?>