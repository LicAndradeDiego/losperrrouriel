<?php
require "basado.php"
$Nombre=$_POST['nombre'];

$Descripcion=$_POST[`descript`];
$Estado=$_POST[`estado`];

$sql ="INSERT INTO Tareas (nombre,descript,estado) VALUES(`$Nombre`,`$Descripcion`,`$Estado`);
if($conexion->query($sql)===TRUE){
echo "Se registro la informacion";
}
?>
