<?php

// conexion con la BD
function conexion(){

$host = "localhost";
$user = "root";
$contraseña = "";

$bd = "crud2";

$conect = mysqli_connect($host, $user,$contraseña);
mysqli_select_db($conect, $bd);
return $conect;
};
?>