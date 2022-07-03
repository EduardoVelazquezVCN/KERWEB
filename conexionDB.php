<?php
   
   $servidor= "localhost";
   $NombreDB = "kerkly_v2";
   $UsaurioDB = "AdminKerkly";
   $ContrasenaDB = "admin kerkly001";
    $con = mysqli_connect($servidor, $UsaurioDB, $ContrasenaDB,$NombreDB);
    if($con->connect_error){
        die("fallo la conexion" .$con->connect_error);
    }else{
        echo 'Conexion Exitosa';
    }

?>