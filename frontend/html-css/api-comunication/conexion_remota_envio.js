var zona_datos_servidor;

function comenzar() {
    zona_datos_servidor = document.getElementById("zona_datos_servidor");
    var boton = document.getElementById("boton");
    boton.addEventListener("click", enviar_datos, false);
}

function enviar_datos() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var datos = new FormData();
    datos.append("nombre", nombre);
    datos.append("apellido", apellido);
    var url = "procesar.php";
    var solicitud = new XMLHttpRequest();
    solicitud.addEventListener("load", mostrar, false);
    solicitud.open("POST", url, true);
    solicitud.send(datos);
}

function mostrar(e) {
    zona_datos_servidor.innerHTML = e.target.response;
}

window.addEventListener("load", comenzar, false);

//Solo funciona en el servidor
//Para pruebas almacenar en sevidor local