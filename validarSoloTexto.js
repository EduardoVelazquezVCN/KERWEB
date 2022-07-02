function validarTextoEntrada(input, patron) {
    var texto = input.value
    var letras = texto.split("")
    for (var x in letras) {
        var letra = letras[x]
        if (!(new RegExp(patron, "i")).test(letra)) {
            letras[x] = ""
        }
    }
    input.value = letras.join("")
}

var txtSoloLetras = document.getElementById("nombre")
txtSoloLetras.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})

var txtSoloLetras = document.getElementById("APaterno")
txtSoloLetras.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})

var txtSoloLetras = document.getElementById("AMaterno")
txtSoloLetras.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})

var txtSoloLetras = document.getElementById("Nacionalidad")
txtSoloLetras.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[a-z ]")
})

var txtSoloNumeros = document.getElementById("Tfijo")
txtSoloNumeros.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[0-9]")
})
var txtSoloNumeros = document.getElementById("Tmovil")
txtSoloNumeros.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[0-9]")
})
var txtSoloNumeros = document.getElementById("telNegocio")
txtSoloNumeros.addEventListener("input", function (event) {
    validarTextoEntrada(this, "[0-9]")
})