<?php

class ClaseKerkly {

    function __construct(){

    }

    public function RegistrarKerkly1($kerklys){
        include_once 'conexionDB.php';
        $Nombre = $kerklys['Nombre'];
        $ApellidoP  = $kerklys['ApellidoP'];
        $ApellidoM  = $kerklys['ApellidoM'];
        $Curp  = $kerklys['Curp'];
        $FechaN  = $kerklys['FechaN'];
        $selectGenero  = $kerklys['selectGenero'];
        $Nacionalidad  = $kerklys['Nacionalidad'];
        $selectEstadoCivil  = $kerklys['selectEstadoCivil'];
        $email  = $kerklys['email'];
        $Telefonofijo  = $kerklys['Telefonofijo'];
        $TelefonoMovil  = $kerklys['TelefonoMovil'];
        $genero="";
        $EstadoC="";
        //seccion 2
        $Estado = $kerklys['Estado'];
        $Municipio = $kerklys['Municipio'];
        $Localidad = $kerklys['Localidad'];
        $codigoP = $kerklys['codigoP'];
        $Colonia = $kerklys['Colonia'];
        $calle = $kerklys['calle'];
        $NoExt = $kerklys['NoExt'];
        $NoInt = $kerklys['NoInt'];
        //seccion 3
        
     
        for ($i=0;$i<count($selectGenero);$i++) { 
        $genero= $selectGenero[$i]; 
        } 
        for ($i=0;$i<count($selectEstadoCivil);$i++) { 
            $EstadoC = $selectEstadoCivil[$i]; 
        } 
        
        $Consulta = "SELECT * FROM kerkly WHERE Curp = '$Curp'";
        $checkCurp = mysqli_fetch_array(mysqli_query($con, $Consulta));
       if(isset($checkCurp)){
           //Aqui poner el diseño de error
           //echo 'El Usuario Ya existe';
           header('location: usuarioExistente.html');
       }else{
          echo $Estado;
          $insertar = "INSERT INTO kerkly (Nombre,Apellido_Paterno,Apellido_Materno,Curp,FechaDeNacimiento,Genero,Nacionalidad,EstadoCivil,correo_electronico,TelefonoCasa,Telefono, Estado, Municipio,Localidad,codigoP,Colonia,calle,NoExt,NoInt)
      
        VALUES ('$Nombre','$ApellidoP','$ApellidoM','$Curp','$FechaN','$genero','$Nacionalidad','$EstadoC','$email','$Telefonofijo','$TelefonoMovil','$Estado')";
        
        if(mysqli_query($con,$insertar)){
            /*header('Location: InfoDom.html');*/
            echo "<script>alert('Usuario insertado exitosamente');</script>";
            //echo 'listo';
        }else{
            echo '¡Error!' .$insertar.mysqli_error($con);
         
        }
        
       }
    }

 } 
    
?>