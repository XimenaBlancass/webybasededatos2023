<?php

$server = "localhost";
$user = "root";
$password = "";


$conexion = new mysql($server, $user, $password);

if($conexion->conect_error){ 
    die("fallo la conexion" .$conexion->conect_error);
}
?>