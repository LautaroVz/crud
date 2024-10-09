<?php


include("conexion.php");

// Obtener el ID del usuario desde el parámetro de la URL
$id = $_GET['id'];

// Consultar los datos del usuario
$sql = "SELECT * FROM usuarios_crud WHERE id = '$id'";
$result = $conn->query($sql);

// Verificar si el usuario existe
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Usuario no encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <div class="form">
        <h1>Editar Usuario</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" placeholder="Nombre" required>
            <input type="text" name="apellido" value="<?php echo $row['apellido']; ?>" placeholder="Apellido" required>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" required>
            <input type="submit" value="Actualizar Usuario" class="btn btn-primary">
        </form>
    </div>
</body>
</html>




