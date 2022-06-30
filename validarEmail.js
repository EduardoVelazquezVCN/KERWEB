document.getElementById('CElectronico').addEventListener('input', function (event) {
    campo = event.target;
    valido = document.getElementById('emailOK');

    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var regOficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (reg.test(campo.value) && regOficial.test(campo.value)) {
        valido.innerText = "válido oficial y extraoficialmente";
    } else if (reg.test(campo.value)) {
        valido.innerText = "válido extraoficialmente";
        console.log('jala');

    } else {
        valido.innerText = "incorrecto";
        console.log('no jala');
    }
});



