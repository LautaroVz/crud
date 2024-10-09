<?php
session_start();
include_once("conexion.php");

if (isset($_POST['usuario']) && isset($_POST['clave'])){


    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Usuario = validate($_POST['usuario']); 
    $Clave = validate($_POST['clave']);

    if (empty($Usuario)) {
        header("Location: index_login.php?error=El Usuario Es Requerido");
        exit();
    }elseif  (empty($Clave)) {
        header("Location: index_login.php?error=La clave Es Requerida");
        exit();
    }
    else{
        
        $Sql = "SELECT * FROM registros_login WHERE usuario = '$Usuario' AND clave='$Clave'";
       $result = $conn->query($Sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $Usuario && $row['clave'] === $Clave) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['id'] = $row['id'];
                header("Location: index.html");
                exit();
            }
            else {
                header("Location: index_login.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }
    }
}
else {
    header("Location: index_login.php");
            exit();
}


?>