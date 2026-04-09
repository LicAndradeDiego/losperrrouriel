<?php
$usuario="root";
$contraseña="";
$direccion="localhost";
$baseDatos="TaskFlow";

$conexion= new mysqli($direccion,$usuario,$contraseña,$baseDatos);
if($conexion->connect_error){
    echo "No se pudo conectar";
}
?>