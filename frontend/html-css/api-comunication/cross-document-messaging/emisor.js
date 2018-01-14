function comenzar() {
    var boton = document.getElementById("boton");
    boton.addEventListener("click", enviar, false);
    window.addEventListener("message", recibir, false);
}

function enviar() {
    var mensaje = document.getElementById("mensaje").value;
    var iframe = document.getElementById("iframe");
    //Dominio Del Receptor
    iframe.contentWindow.postMessage(mensaje, "http://localhost"); //* Para Permitir Cualquier Receptor
}

function recibir(e) {
    var zona_recepcion = document.getElementById("zona_recepcion");
    zona_recepcion.innerHTML += e.data + "<br>";
}

window.addEventListener("load", comenzar, false);