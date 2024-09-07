<?php
include("conexion.php");
$con = conexion();

$id= $_GET['id'];

// esto es para que nos traiga el usuario que nosotros estamos queriendo editar.
$sql= "SELECT * FROM usuarios WHERE id='$id'";
$query= mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>
    <div class= "form">
        <form action="editar_usuario.php" method= "POST">
            <h1>Editar usuario</h1>
            <input type="hidden" name= "id" value= "<?= $row['id'] ?>">
            <input type="text" name= "nombre" placeholder= "Nombre" value= "<?= $row['nombre'] ?>">
            <input type="text"name= "apellido" placeholder= "Apellido" value= "<?= $row['apellido'] ?>">
            <input type="text"name= "email" placeholder= "Email" value= "<?= $row['email'] ?>">
            <input type="submit" value="Actualizar Informacion" class="editar_tabla">

        </form>
    </div>
</body>
</html>