<?php

class ClaseKerkly {

    function __construct(){

    }

    public function RegistrarKerkly1($kerklys, $tipo_imagen , $tipo_imagen2  , $tipo_imagen3 , $tipo_imagen4 , $tipo_imagen5 , $tipo_imagen6,  $tipo_imagen7 , $tipo_imagen8 ,$tipo_imagen9 , $tipo_imagen10 , $tipo_imagen11 ,$tipo_imagen12,$tipo_imagen13){
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
        $telNegocio = $kerklys['telNegocio'];
        $oficio="";
        //seccion 3
       // $ReferenciaTrabajo1 =$kerklys['ReferenciaTrabajo1'];
     
        for ($i=0;$i<count($selectGenero);$i++) { 
        $genero= $selectGenero[$i]; 
        } 
        for ($i=0;$i<count($selectEstadoCivil);$i++) { 
            $EstadoC = $selectEstadoCivil[$i]; 
        } 

        // INICIO select oficios -- obtencion de datos de bd 
        //$consultaOficios="SELECT * FROM kerkly where oficios";
        //$ejecutar=mysqli_query($con,$consultaOficios) or die(mysqli_error($con));

         // llenando el select
         //foreach ($ejecutar as $opciones):

         //endforeach
        // FIN select oficios -- obtencion de datos de bd
        $Consulta = "SELECT * FROM kerkly WHERE Curp = '$Curp'";
        $checkCurp = mysqli_fetch_array(mysqli_query($con, $Consulta));
       if(isset($checkCurp)){
           //Aqui poner el diseño de error
           //echo 'El Usuario Ya existe';
           header('location: usuarioExistente.html');
       }else{
          echo $Estado;
          $sqlInsertDireccion = "INSERT INTO direccion (Estado, Ciudad, Codigo_Postal, Colonia, Calle, No_Interior, No_Exterior) VALUES('$Estado','$Localidad', '$codigoP','$Colonia','$calle','$NoInt', '$NoExt')";
          $ejecutado = mysqli_query($con, $sqlInsertDireccion);
      
          if ($ejecutado == 1) {
              $idDireccion = mysqli_insert_id($con);
          }
        
        //manipulando para guardar archivos referencia de trabajo 1
         
            if(empty($_FILES[$tipo_imagen]["name"]))
            return;

            $file_name = $_FILES[$tipo_imagen]["name"];
            $extension = pathinfo($_FILES[$tipo_imagen]["name"],PATHINFO_EXTENSION);
            $ext_formatos = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension),$ext_formatos))
                return;
            if($_FILES[$tipo_imagen]["size"] > 33000003008000)
                return;
            $targetDir = "archivosCargados/";
            @rmdir($targetDir);
            if (!file_exists($targetDir)){
                @mkdir($targetDir,077,true);
            }
            $token = md5(uniqid(rand(), true));
            $file_name = $token.'.'.$extension;
            $add = $targetDir.$file_name;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";


            $db_url_img = "http://localhost/keklywebv2/archivosCargados/$file_name";

        //fin manipulando para guardar archivos referencia de trabajo 1

        // subir archivos 2 002
            //manipulando para guardar archivos referencia de trabajo 2
         
            if(empty($_FILES[$tipo_imagen2]["name"]))
            return;

            $file_name2 = $_FILES[$tipo_imagen2]["name"];
            $extension2 = pathinfo($_FILES[$tipo_imagen2]["name"],PATHINFO_EXTENSION);
            $ext_formatos2 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension2),$ext_formatos2))
                return;
            if($_FILES[$tipo_imagen2]["size"] > 33000003008000)
                return;
            $targetDir2 = "archivosCargados/";
            @rmdir($targetDir2);
            if (!file_exists($targetDir2)){
                @mkdir($targetDir2,077,true);
            }
            $token2 = md5(uniqid(rand(), true));
            $file_name2 = $token2.'.'.$extension2;
            $add2 = $targetDir2.$file_name2;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";


       
            $db_url_img2 = "http://localhost/keklywebv2/archivosCargados/$file_name2";
        // fin 002

            
        // subir archivos 3
            //manipulando para guardar archivos referencia familiar
         
            if(empty($_FILES[$tipo_imagen3]["name"]))
            return;

            $file_name3 = $_FILES[$tipo_imagen3]["name"];
            $extension3 = pathinfo($_FILES[$tipo_imagen3]["name"],PATHINFO_EXTENSION);
            $ext_formatos3 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension3),$ext_formatos3))
                return;
            if($_FILES[$tipo_imagen3]["size"] > 33000003008000)
                return;
            $targetDir3 = "archivosCargados/";
            @rmdir($targetDir3);
            if (!file_exists($targetDir3)){
                @mkdir($targetDir3,077,true);
            }
            $token3 = md5(uniqid(rand(), true));
            $file_name3 = $token3.'.'.$extension2;
            $add3 = $targetDir3.$file_name3;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";


       
            $db_url_img3 = "http://localhost/keklywebv2/archivosCargados/$file_name3";
        // fin referencia familiar

        // subir archivos 4
            //manipulando para guardar archivos foto
         
            if(empty($_FILES[$tipo_imagen4]["name"]))
            return;

            $file_name4 = $_FILES[$tipo_imagen4]["name"];
            $extension4 = pathinfo($_FILES[$tipo_imagen4]["name"],PATHINFO_EXTENSION);
            $ext_formatos4 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension4),$ext_formatos4))
                return;
            if($_FILES[$tipo_imagen4]["size"] > 33000003008000)
                return;
            $targetDir4 = "archivosCargados/";
            @rmdir($targetDir4);
            if (!file_exists($targetDir4)){
                @mkdir($targetDir4,077,true);
            }
            $token4 = md5(uniqid(rand(), true));
            $file_name4 = $token4.'.'.$extension4;
            $add4 = $targetDir4.$file_name4;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";


       
            $db_url_img4 = "http://localhost/keklywebv2/archivosCargados/$file_name4";
        // fin subir archivos 4

        // subir archivos 5
            //manipulando para guardar archivos INE
         
            if(empty($_FILES[$tipo_imagen5]["name"]))
            return;

            $file_name5 = $_FILES[$tipo_imagen5]["name"];
            $extension5 = pathinfo($_FILES[$tipo_imagen5]["name"],PATHINFO_EXTENSION);
            $ext_formatos5 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension5),$ext_formatos5))
                return;
            if($_FILES[$tipo_imagen5]["size"] > 33000003008000)
                return;
            $targetDir5 = "archivosCargados/";
            @rmdir($targetDir5);
            if (!file_exists($targetDir5)){
                @mkdir($targetDir5,077,true);
            }
            $token5 = md5(uniqid(rand(), true));
            $file_name5 = $token5.'.'.$extension5;
            $add5 = $targetDir5.$file_name5;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";


       
            $db_url_img5 = "http://localhost/keklywebv2/archivosCargados/$file_name5";
        //fin subir archivos 5

        // subir archivos 6
            //manipulando para guardar archivos CURP
         
            if(empty($_FILES[$tipo_imagen6]["name"]))
            return;

            $file_name6 = $_FILES[$tipo_imagen6]["name"];
            $extension6 = pathinfo($_FILES[$tipo_imagen6]["name"],PATHINFO_EXTENSION);
            $ext_formatos6 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension6),$ext_formatos6))
                return;
            if($_FILES[$tipo_imagen6]["size"] > 33000003008000)
                return;
            $targetDir6 = "archivosCargados/";
            @rmdir($targetDir6);
            if (!file_exists($targetDir6)){
                @mkdir($targetDir6,077,true);
            }
            $token6 = md5(uniqid(rand(), true));
            $file_name6 = $token6.'.'.$extension6;
            $add6 = $targetDir6.$file_name6;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img6 = "http://localhost/keklywebv2/archivosCargados/$file_name6";
        //fin subir archivos 6


        // subir archivos 7
            //manipulando para guardar archivos COMPROBANTE DE DOMICILIO
         
            if(empty($_FILES[$tipo_imagen7]["name"]))
            return;

            $file_name7 = $_FILES[$tipo_imagen7]["name"];
            $extension7 = pathinfo($_FILES[$tipo_imagen7]["name"],PATHINFO_EXTENSION);
            $ext_formatos7 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension7),$ext_formatos7))
                return;
            if($_FILES[$tipo_imagen7]["size"] > 33000003008000)
                return;
            $targetDir7 = "archivosCargados/";
            @rmdir($targetDir7);
            if (!file_exists($targetDir7)){
                @mkdir($targetDir7,077,true);
            }
            $token7 = md5(uniqid(rand(), true));
            $file_name7 = $token7.'.'.$extension7;
            $add7 = $targetDir7.$file_name7;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img7 = "http://localhost/keklywebv2/archivosCargados/$file_name7";
        //fin subir archivos 7


        // subir archivos 8
            //manipulando para guardar archivos COMPROBANTE MEDICO
         
            if(empty($_FILES[$tipo_imagen8]["name"]))
            return;

            $file_name8 = $_FILES[$tipo_imagen8]["name"];
            $extension8 = pathinfo($_FILES[$tipo_imagen8]["name"],PATHINFO_EXTENSION);
            $ext_formatos8 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension8),$ext_formatos8))
                return;
            if($_FILES[$tipo_imagen8]["size"] > 33000003008000)
                return;
            $targetDir8 = "archivosCargados/";
            @rmdir($targetDir8);
            if (!file_exists($targetDir8)){
                @mkdir($targetDir8,077,true);
            }
            $token8 = md5(uniqid(rand(), true));
            $file_name8 = $token8.'.'.$extension8;
            $add8 = $targetDir8.$file_name8;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img8 = "http://localhost/keklywebv2/archivosCargados/$file_name8";
        //fin subir archivos 8

        // subir archivos 9
            //manipulando para guardar archivos CARTA DE ANTECEDENTES PENALES
         
            if(empty($_FILES[$tipo_imagen9]["name"]))
            return;

            $file_name9 = $_FILES[$tipo_imagen9]["name"];
            $extension9 = pathinfo($_FILES[$tipo_imagen9]["name"],PATHINFO_EXTENSION);
            $ext_formatos9 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension9),$ext_formatos9))
                return;
            if($_FILES[$tipo_imagen9]["size"] > 33000003008000)
                return;
            $targetDir9 = "archivosCargados/";
            @rmdir($targetDir9);
            if (!file_exists($targetDir9)){
                @mkdir($targetDir9,077,true);
            }
            $token9 = md5(uniqid(rand(), true));
            $file_name9 = $token9.'.'.$extension9;
            $add9 = $targetDir9.$file_name9;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img9 = "http://localhost/keklywebv2/archivosCargados/$file_name9";
        //fin subir archivos 9

        // subir archivos 10
            //manipulando para guardar archivos REGISTRO SAT KERKLY
         
            if(empty($_FILES[$tipo_imagen10]["name"]))
            return;

            $file_name10 = $_FILES[$tipo_imagen10]["name"];
            $extension10 = pathinfo($_FILES[$tipo_imagen10]["name"],PATHINFO_EXTENSION);
            $ext_formatos10 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension10),$ext_formatos10))
                return;
            if($_FILES[$tipo_imagen10]["size"] > 33000003008000)
                return;
            $targetDir10 = "archivosCargados/";
            @rmdir($targetDir10);
            if (!file_exists($targetDir10)){
                @mkdir($targetDir10,077,true);
            }
            $token10 = md5(uniqid(rand(), true));
            $file_name10 = $token10.'.'.$extension10;
            $add10 = $targetDir10.$file_name10;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img10 = "http://localhost/keklywebv2/archivosCargados/$file_name10";
        //fin subir archivos 10

        // subir archivos 11
            //manipulando para guardar archivos REGISTRO SAT KERKLY
         
            if(empty($_FILES[$tipo_imagen11]["name"]))
            return;

            $file_name11 = $_FILES[$tipo_imagen11]["name"];
            $extension11 = pathinfo($_FILES[$tipo_imagen11]["name"],PATHINFO_EXTENSION);
            $ext_formatos11 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension11),$ext_formatos11))
                return;
            if($_FILES[$tipo_imagen11]["size"] > 33000003008000)
                return;
            $targetDir11 = "archivosCargados/";
            @rmdir($targetDir11);
            if (!file_exists($targetDir11)){
                @mkdir($targetDir11,077,true);
            }
            $token11 = md5(uniqid(rand(), true));
            $file_name11 = $token11.'.'.$extension11;
            $add11 = $targetDir11.$file_name11;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img11 = "http://localhost/keklywebv2/archivosCargados/$file_name11";
        //fin subir archivos 11

        // subir archivos 12
            //manipulando para guardar archivos FOTO DOMICILIO PARTICULAR
         
            if(empty($_FILES[$tipo_imagen12]["name"]))
            return;

            $file_name12 = $_FILES[$tipo_imagen12]["name"];
            $extension12 = pathinfo($_FILES[$tipo_imagen12]["name"],PATHINFO_EXTENSION);
            $ext_formatos12 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension12),$ext_formatos12))
                return;
            if($_FILES[$tipo_imagen12]["size"] > 33000003008000)
                return;
            $targetDir12 = "archivosCargados/";
            @rmdir($targetDir12);
            if (!file_exists($targetDir12)){
                @mkdir($targetDir12,077,true);
            }
            $token12 = md5(uniqid(rand(), true));
            $file_name12 = $token12.'.'.$extension12;
            $add12 = $targetDir12.$file_name12;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img12 = "http://localhost/keklywebv2/archivosCargados/$file_name12";
        //fin subir archivos 12

        // subir archivos 13
            //manipulando para guardar archivos FOTO DOMICILIO O LOCAL
         
            if(empty($_FILES[$tipo_imagen13]["name"]))
            return;

            $file_name13 = $_FILES[$tipo_imagen13]["name"];
            $extension13 = pathinfo($_FILES[$tipo_imagen13]["name"],PATHINFO_EXTENSION);
            $ext_formatos13 = array('png','gif','jpg','jpeg','pdf');

            if(!in_array(strtolower($extension13),$ext_formatos13))
                return;
            if($_FILES[$tipo_imagen13]["size"] > 33000003008000)
                return;
            $targetDir13 = "archivosCargados/";
            @rmdir($targetDir13);
            if (!file_exists($targetDir13)){
                @mkdir($targetDir13,077,true);
            }
            $token13 = md5(uniqid(rand(), true));
            $file_name13 = $token13.'.'.$extension13;
            $add13 = $targetDir13.$file_name13;
            //$db_url_img = "http://localhost/tutorial/img/$anio/$mes/$dia/$file_name";
            $db_url_img13 = "http://localhost/keklywebv2/archivosCargados/$file_name13";
        //fin subir archivos 13

            if(move_uploaded_file($_FILES[$tipo_imagen]["tmp_name"],$add) && move_uploaded_file($_FILES[$tipo_imagen2]["tmp_name"],$add2) && move_uploaded_file($_FILES[$tipo_imagen3]["tmp_name"],$add3) && move_uploaded_file($_FILES[$tipo_imagen4]["tmp_name"],$add4) && move_uploaded_file($_FILES[$tipo_imagen5]["tmp_name"],$add5) && move_uploaded_file($_FILES[$tipo_imagen6]["tmp_name"],$add6) && move_uploaded_file($_FILES[$tipo_imagen7]["tmp_name"],$add7) && move_uploaded_file($_FILES[$tipo_imagen8]["tmp_name"],$add8)  && move_uploaded_file($_FILES[$tipo_imagen9]["tmp_name"],$add9) && move_uploaded_file($_FILES[$tipo_imagen10]["tmp_name"],$add10) && move_uploaded_file($_FILES[$tipo_imagen11]["tmp_name"],$add11) && move_uploaded_file($_FILES[$tipo_imagen12]["tmp_name"],$add12) && move_uploaded_file($_FILES[$tipo_imagen13]["tmp_name"],$add13)){
                echo 'entrp';
                $insertar = "INSERT INTO kerkly (Nombre,Apellido_Paterno,Apellido_Materno,Curp,FechaDeNacimiento,Genero,Nacionalidad,EstadoCivil,correo_electronico,TelefonoCasa,Telefono,Municipio,direccionId,telNegocio,Referencia1,Referencia2,ReferenciaFam,fotoKEKRLY,ineKERKLY,curpKERKLY,comprobanteDomicilio,certificadoMedico,cartaAntePenales,regSatKERKLY,comprobanteVacuna,fotoDomicilioPart,fotoLocal)
                VALUES ('$Nombre','$ApellidoP','$ApellidoM','$Curp','$FechaN','$genero','$Nacionalidad','$EstadoC','$email','$Telefonofijo','$TelefonoMovil','$Municipio','$idDireccion','$telNegocio','$db_url_img','$db_url_img2','$db_url_img3','$db_url_img4','$db_url_img5','$db_url_img6','$db_url_img7','$db_url_img8','$db_url_img9','$db_url_img10','$db_url_img11','$db_url_img12','$db_url_img13')";
                
                if(mysqli_query($con,$insertar)){
                    //header('Location: InfoDom.html');
                    echo "<script>
                        alert('Usuario insertado exitosamente');
                        location.assign('RegistroKERKLY.php');
                        </script>";
                   

                    //echo 'listo';
                }else{
                    echo '¡Error!' .$insertar.mysqli_error($con);
         
                }
            }

    
        }
    
    }

 
} 
    
?>