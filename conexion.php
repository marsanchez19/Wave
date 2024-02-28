<?php

$server= "localhost"
$user= "root"
$pass= ""
$bd= "wave"

$conexion = new mysqli ($server, $user, $pass, $bd);
/*
if ($conexion->connect_errno) {
    die( "conexion fallida" . $conexion->connect_errno);
} else {
    echo "conectado";
}
*/
?>