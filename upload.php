<?php
$directorio = "archivosCargados/"; /*nombre de la carpeta de los archivos*/
$archivo = $directorio . basename($_FILES["file"]["name"]);
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$esImagen = getimagesize($_FILES["file"] ["tmp_name"]);

if($esImagen != true){
    //validando tamaño del archivo 
    $size = $_FILES["name"]["size"];

    if($size > 900000){
        echo "El archivo tiene que ser menor a 500kb";
    }else{
        //validar tipo de archivo 
        if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg" || $tipoArchivo == "png" || $tipoArchivo == "pdf"){
            //se valido el archivo correctamernte
            if(move_uploaded_file($_FILES["file"] ["tmp_name"],$archivo)){
                echo "El archivo se subio correctamente";
            }
            else{
                echo "Hubo un error al subir el archivo";
            }
        }else{
            echo "tipo de archivo no compatible, solo se admite JPG o JPEG";
        }
    }
}else{
    echo "El documento no es una imagen";
}

?>