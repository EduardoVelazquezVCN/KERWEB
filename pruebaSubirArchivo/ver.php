<?php
include 'conexion.php';
$query ="SELECT archivo_nombre,archivo_binario,archivo_tipo,archivo_peso FROM archivos WHERE id='".$_GET['id']."'";
$resul = $conexion->query($query) or die(mysql_error());
 
if ($row = $resul->fetch_array()) {
$contenido = $row['archivo_binario'];
$tipo = $row['archivo_tipo'];
}
 
header("Content-type: $tipo");
echo $contenido;
?>
