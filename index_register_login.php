<?php


include 'conexion.php';

$sql = "SELECT * FROM roles";
$result = $conn->query($sql);




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Usuarios</title>
</head>

<body>
    <div>
        <div class="container">
            <h2 class="my-4">Registro</h2>
            <form method="POST" action="register_login.php">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="clave" name="clave" required>
                </div>
                <div class"mb-3">
                    <label for="rol_id" class="form-label">Rol</label>
                    <select id="rol_id" name="rol_id" class="form-select" aria-label="Default select example">
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value={$row['id']}>{$row['nombre']}</option>
";
                            }
                        }
                        ?>

                    </select>
                </div>
                <button type="submit" class="btn mt-5 btn-primary">Registrarse</button>
            </form>
        </div>
    </div>

</body>

</html>

<?php
$conn->close();
?>