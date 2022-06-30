<?php
   
   $servidor= "localhost";
   $NombreDB = "kerklyapp";
  $UsaurioDB = "root";
  $ContrasenaDB = "kerkly1234";
    $conexion = mysqli_connect($servidor, $UsaurioDB, $ContrasenaDB,$NombreDB);
    if($conexion->connect_error){
        die("fallo la conexion" .$conexion->connect_error);
    }

?>