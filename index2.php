<?php
include("conexion.php");
$sql = "SELECT id, nombre, apellido, email FROM usuarios";
$result = $conn->query($sql);

// $sql= "SELECT * FROM usuarios";
// $query= mysqli_query($con, $sql);
// if (!$query) {
//     // si hubo un error muestra el mensaje de error
//     die("Error en la consulta: " . mysqli_error($con));
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['email']}</td>
                                <td>
                                    <a href='editar_usuario.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                                    <a href='eliminar_usuario.php?id={$row['id']}' class='btn btn-danger btn-sm'>Eliminar</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay registros</td></tr>";
                }
                ?>
            </tbody>
        
        </table>

    </div>
    <a href="cerrar_sesion.php" class="btn btn-danger">Cerrar Sesion</a>
</body>
</html>

