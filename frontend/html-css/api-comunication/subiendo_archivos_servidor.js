var zona_datos_servidor;
var boton

function comenzar() {
    zona_datos_servidor = document.getElementById("zona_datos_servidor");
    boton = document.getElementById("archivos");
    boton.addEventListener("change", subir_archivos, false);
}

function subir_archivos(e) {
    var archivos = e.target.files;
    var archivo = archivos[0];
    var url = "procesar.php";
    var solicitud = new XMLHttpRequest();
    var subida = solicitud.upload;
    subida.addEventListener("loadstart", comienza_barra, false);
    subida.addEventListener("progress", estado_barra, false);
    subida.addEventListener("load", mostrar, false);
    solicitud.open("POST", url, true);
    var datos = new FormData();
    datos.append("archivo", archivo);
    solicitud.send(datos);
}

function comienza_barra() {
    zona_datos_servidor.innerHTML = "<progress value='0' max='100'></progress>";
}

function estado_barra(e) {
    var porcentaje = parseInt(e.loaded / e.total * 100);
    var barra_progreso = zona_datos_servidor.querySelector("progress");
    barra_progreso.value = porcentaje;
    zona_progreso.innerHTML = porcentaje + "%";
}

function mostrar(e) {
    //zona_datos_servidor.innerHTML = e.target.responseText;
    zona_datos_servidor.innerHTML = "Subida Finalizada";
}

window.addEventListener("load", comenzar, false);