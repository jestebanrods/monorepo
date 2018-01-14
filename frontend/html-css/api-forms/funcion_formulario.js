function Comenzar() {
    var Nombre = document.getElementById('Nombre');
    var Apellido = document.getElementById('Apellido');
    Nombre.addEventListener('input', Validar, false);
    Apellido.addEventListener('input', Validar, false);
    Validar();
}

function Validar() {
    if (Nombre.value == "" && Apellido.value == "") {
        Nombre.setCustomValidity('Introduce Nombre, Apellido');
        Nombre.style.background = '#FFB4B4';
        Apellido.style.background = '#FFB4B4';
    } else {
        Nombre.setCustomValidity('');
        Nombre.style.background = '#FFFFFF';
        Apellido.style.background = '#FFFFFF';
    }
}

window.addEventListener('load', Comenzar, false);
