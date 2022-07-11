function validarbrigada() {
  if (brigada.value == "Brigada0") {
    Swal.fire({
      title: 'El campo brigada es obligatorio',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  } 
}


function ocultarFommulario1() {
  document.getElementById('Formulario1').style.display = 'none';
  document.getElementById('Formulario2').style.display = 'block';
  document.getElementById('Formulario3').style.display = 'none';
  document.getElementById('Formulario4').style.display = 'none';
  document.getElementById('Formulario5').style.display = 'none';
  document.getElementById('form2').style.display = 'none';
  document.getElementById('form3').style.display = 'block';
  document.getElementById('form4').style.display = 'none';
  document.getElementById('form5').style.display = 'none';
  document.getElementById('form6').style.display = 'none';
}



function check() {

  if (validarbrigada() == false) {
    validarbrigada();
    console.log('estoy aqui 1 brigada');
  } else {
    ocultarFommulario1();
    console.log('estoy aca 2 brigada');
  }
}

/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/* validacion infomrmacion domicilio*/
/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/*function validarInfoDomicilio() {
  if (estado.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (municipio.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (localidad.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (codigoP.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (colonia.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (calle.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (NoExt.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (NoInt.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
}*/
/*block el formulario siguiente*/
function ocultarFommulario2() {
  document.getElementById('Formulario1').style.display = 'none';
  document.getElementById('Formulario2').style.display = 'none';
  document.getElementById('Formulario3').style.display = 'block';
  document.getElementById('Formulario4').style.display = 'none';
  document.getElementById('Formulario5').style.display = 'none';
  document.getElementById('form2').style.display = 'none';
  document.getElementById('form3').style.display = 'none';
  document.getElementById('form4').style.display = 'block';
  document.getElementById('form5').style.display = 'none';
  document.getElementById('form6').style.display = 'none';
}

function check2() {
  /*if (validarInfoDomicilio() == false) {
    validarInfoDomicilio();
    console.log('estoy aqui 2');
  } else {
    ocultarFommulario2();
    console.log('estoy aca 2');
  }*/
  ocultarFommulario2();
}

/*function volver1(){
  document.getElementById('Formulario1').style.display = 'block';
  document.getElementById('Formulario2').style.display = 'none';
  document.getElementById('Formulario3').style.display = 'none';
  document.getElementById('Formulario4').style.display = 'none';
  document.getElementById('Formulario5').style.display = 'none';
  document.getElementById('form2').style.display = 'block';
  document.getElementById('form3').style.display = 'none';
  document.getElementById('form4').style.display = 'none';
  document.getElementById('form5').style.display = 'none';
  document.getElementById('form6').style.display = 'none';
}*/

/*function volverFormulario1(){
  //volver1();
  console.log("estoy aqui regresando");
}*/
/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/* validacion info oficios */
/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/*function validarOficios() {
  if (NoOficio.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (oficios.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (telNegocio.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (ReferenciaTrabajo1.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (ReferenciaTrabajo2.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (ReferenciaFamiliar.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
}*/
/*block el formulario siguiente*/
function ocultarFommulario3() {
  document.getElementById('Formulario1').style.display = 'none';
  document.getElementById('Formulario2').style.display = 'none';
  document.getElementById('Formulario3').style.display = 'none';
  document.getElementById('Formulario4').style.display = 'block';
  document.getElementById('Formulario5').style.display = 'none';
  document.getElementById('form2').style.display = 'none';
  document.getElementById('form3').style.display = 'none';
  document.getElementById('form4').style.display = 'none';
  document.getElementById('form5').style.display = 'block';
  document.getElementById('form6').style.display = 'none';
  
}

function check3() {
  /*if (validarOficios() == false) {
    validarOficios();
    console.log('estoy aqui oficios');
  } else {
    ocultarFommulario3();
    console.log('estoy aca oficios');
  }*/
  ocultarFommulario3();
}

/*function check3(){
  
    ocultarFommulario3();
    console.log("estoy aqui w");
  
}*/



/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/* validacion documentos escaneados */
/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/*function validarDocumentosEscaneados() {
  if (foto.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (ine.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (curp.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (comprobanteDomicilio.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (certificadoMedico.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (antecedentesPenales.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (regSat.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (comprobanteVacunacion.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (fotoDomicilio.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (fotoNegocio.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }

}*/
/*block el formulario siguiente*/
function ocultarFommulario4() {
  document.getElementById('Formulario1').style.display = 'none';
  document.getElementById('Formulario2').style.display = 'none';
  document.getElementById('Formulario3').style.display = 'none';
  document.getElementById('Formulario4').style.display = 'none';
  document.getElementById('Formulario5').style.display = 'block';
  document.getElementById('form2').style.display = 'none';
  document.getElementById('form3').style.display = 'none';
  document.getElementById('form4').style.display = 'none';
  document.getElementById('form5').style.display = 'none';
  document.getElementById('form6').style.display = 'block';
}

function check4() {
 /* if (validarDocumentosEscaneados() == false) {
    validarDocumentosEscaneados();
    console.log('estoy aqui 4');
  } else {
    ocultarFommulario4();
    console.log('estoy aca 4');
  }*/
  ocultarFommulario4();
}



/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
/* validacion creacion de la cuenta */
/*||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| */
function validarCreacionCuenta() {
  if (contrasena.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
  else if (contrasenaConfirm.value == "") {
    Swal.fire({
      title: 'Llena todos los campos para continuar',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })
    return false;
  }
}
/*block el formulario siguiente*/
function ocultarFommulario5() {
  document.getElementById('Formulario1').style.display = 'none';
  document.getElementById('Formulario2').style.display = 'none';
  document.getElementById('Formulario3').style.display = 'none';
  document.getElementById('Formulario4').style.display = 'none';
  document.getElementById('Formulario5').style.display = 'block';
  document.getElementById('form2').style.display = 'none';
  document.getElementById('form3').style.display = 'none';
  document.getElementById('form4').style.display = 'none';
  document.getElementById('form5').style.display = 'none';
  document.getElementById('form6').style.display = 'block';

}

function check5() {

  if (validarCreacionCuenta() == false) {
    validarCreacionCuenta();
    console.log('estoy aqui 5');


  } else if (contrasena.value == contrasenaConfirm.value) {
    console.log('Las contraseñas coinciden');
    document.getElementById('mostrarLetrero').style.display = 'block';
    document.getElementById('botonGuardarFinal').style.display = 'block';
    
  }
  else {
    /*ocultarFommulario5();*/
    console.log('Rectifica las contraseñas');
    Swal.fire({
      title: 'Las contraseñas no coinciden, Verificalo',
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })

  }
}


/*http://localhost//keklywebv2/RegistroKERKLY.html*/ 