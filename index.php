<?php
include("conexion.php");
$con = conexion();
$sql= "SELECT * FROM usuarios";
$query= mysqli_query($con, $sql);
if (!$query) {
    // si hubo un error muestra el mensaje de error
    die("Error en la consulta: " . mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class= "form">
    <h1>Crear usuario</h1>
        <form action = "insertar_user.php" method = "POST"> 

            <input type= "text" name= "nombre"  placeholder= "Nombre">
            <input type= "text" name= "apellido" placeholder= "Apellido">
            <input type= "text" name= "email" placeholder= "Email"> 

            <input type= "submit" value= "agregar usuario" class="editar_tabla">
        </form>
    </div>

    <div class= "usuarios_tabla">
        <h2>Usuarios Registrados</h2>
        <table> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>

                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody> 
            <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['apellido'] ?></th>
                        <th><?= $row['email'] ?></th>

                    <th><a href="actualizar.php?id=<?= $row['id'] ?>" class= "editar_tabla">Editar</a></th>
                    <th><a href="eliminar_usuario.php?id=<?= $row['id'] ?>" class= "eliminar_tabla">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        
        </table>

    </div>
</body>
</html>

