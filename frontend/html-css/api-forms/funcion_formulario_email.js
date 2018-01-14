var Edad;

function Comenzar() {
    Edad = document.getElementById('Edad');
    Edad.addEventListener('input', CambiaRango, false);
    //document.DatosUsuario.addEventListener('invalid', Validar, true);
    document.DatosUsuario.addEventListener('input', ValidarTiempoReal, false);
    document.getElementById('Enviar').addEventListener('click', Enviar, false);
}

function CambiaRango() {
    var Salida = document.getElementById('Rango');
    var Calculo = Edad.value - 30;
    if (Calculo < 30) {
        Calculo = 0;
        Edad.value = 30;
    }
    Salida.innerHTML = Calculo + ' A ' + Edad.value;
}

function Validar(E) {
    var Elemento = E.target;
    Elemento.style.background = '#F8A1A1';
}

function Enviar() {
    var CuadroUsuario = document.getElementById('Usuario');
    var Correcto = document.checkValidity();
    if (Correcto) {
        document.DatosUsuario.submit();
    } else if (CuadroUsuario.validity.valueMissing) {
        alert('Usuario Vacio');
    }
}

function ValidarTiempoReal(E) {
    var Elemento = E.target;
    if (Elemento.validity.valid) {
        Elemento.style.background = '#FFFFFF';
    } else {
        Elemento.style.background = '#F8A1A1';
    }
}

window.addEventListener('load', Comenzar, false);