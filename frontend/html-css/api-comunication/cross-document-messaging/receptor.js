function comenzar() {
    window.addEventListener("message", receptor, false);
}

function receptor(e) {
    var zona_mensaje = document.getElementById("zona_mensaje");
    // Dominio Del Remitente
    if (e.origin == "http://localhost") {
        zona_mensaje.innerHTML += "Mensaje Desde: " + e.origin + "<br>";
        zona_mensaje.innerHTML += "Mensaje:" + e.data + "<br>";
        e.source.postMessage("Mensaje Recibido Correctamente", e.origin);
    } else {
        e.source.postMessage("No Estas Autorizado", e.origin);
    }
}

window.addEventListener("load", comenzar, false);