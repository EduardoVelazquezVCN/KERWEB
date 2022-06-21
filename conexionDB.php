<?php
   
   $servidor= "localhost";
   $NombreDB = "kerklyapp";
  $UsaurioDB = "root";
  $ContrasenaDB = "kerkly1234";
    $con = mysqli_connect($servidor, $UsaurioDB, $ContrasenaDB,$NombreDB);
    if($con->connect_error){
        die("fallo la conexion" .$con->connect_error);
    }

?>