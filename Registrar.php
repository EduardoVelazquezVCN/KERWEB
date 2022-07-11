<?php
include_once 'Crud.php';

/*include_once 'CrudInfoDom.php';*/

$Kerklys['selectBrigada'] = $_POST['selectBrigada'];

if (isset($_POST['Nombre'])) {
    $Kerklys['Nombre'] = $_POST['Nombre'];
}

if (isset($_POST['ApellidoP'])) {
    $Kerklys['ApellidoP'] = $_POST['ApellidoP'];
}
if (isset($_POST['ApellidoM'])) {
    $Kerklys['ApellidoM'] = $_POST['ApellidoM'];
}

if (isset($_POST['Curp'])) {
    $Kerklys['Curp'] = $_POST['Curp'];
}

if (isset($_POST['FechaN'])) {
    $Kerklys['FechaN'] = $_POST['FechaN'];
}

    $Kerklys['selectGenero'] = $_POST['selectGenero'];


if (isset($_POST['Nacionalidad'])) {
    $Kerklys['Nacionalidad'] = $_POST['Nacionalidad'];
}


    $Kerklys['selectEstadoCivil'] = $_POST['selectEstadoCivil'];
    $Kerklys['selectOficios'] = $_POST['selectOficios'];
    

    

if (isset($_POST['email'])) {
    $Kerklys['email'] = $_POST['email'];
}
if (isset($_POST['Telefonofijo'])) {
    $Kerklys['Telefonofijo'] = $_POST['Telefonofijo'];
}

if (isset($_POST['TelefonoMovil'])) {
    $Kerklys['TelefonoMovil'] = $_POST['TelefonoMovil'];
}

if (isset($_POST['Estado'])) {
    $Kerklys['Estado'] = $_POST['Estado'];
}

if (isset($_POST['Municipio'])) {
    $Kerklys['Municipio'] = $_POST['Municipio'];
}
if (isset($_POST['Localidad'])) {
    $Kerklys['Localidad'] = $_POST['Localidad'];
}
if (isset($_POST['codigoP'])) {
    $Kerklys['codigoP'] = $_POST['codigoP'];
}
if (isset($_POST['Colonia'])) {
    $Kerklys['Colonia'] = $_POST['Colonia'];
}
if (isset($_POST['calle'])) {
    $Kerklys['calle'] = $_POST['calle'];
}
if (isset($_POST['NoExt'])) {
    $Kerklys['NoExt'] = $_POST['NoExt'];
}
if (isset($_POST['NoInt'])) {
    $Kerklys['NoInt'] = $_POST['NoInt'];
}
if (isset($_POST['telNegocio'])) {
    $Kerklys['telNegocio'] = $_POST['telNegocio'];
}
/*if (isset($_POST['telNegocio'])) {
    $Kerklys['telNegocio'] = $_POST['telNegocio'];
}*/

if(isset($_POST['Contrasena'])){
    //$contra= $_POST['Contrasena'];
    
    $Kerklys['Contrasena'] = $_POST['Contrasena'];
    $Contrasena = $Kerklys['Contrasena'];
   // echo $Contrasena;
}




$Registrar = new ClaseKerkly ();

$Registrar->RegistrarKerkly1($Kerklys, "ReferenciaTrabajo1", "ReferenciaTrabajo2","ReferenciaFamiliar" ,"fotoKerkly" , "INEKerkly" , "curpKERKLY" , "comprobanteDomicilio" , "certificadoMedico" ,"cartaAntePenales","regSatKERKLY" , "comprobanteVacuna" , "fotoDomicilioPart" ,"fotoLocal", $Contrasena);

/*$Registrar2 = new ClaseKerkly2 ();

$Registrar2->RegistrarKerkly2($Kerklys);*/
?>