var zona_datos_servidor;
var zona_progreso;

function comenzar() {
    zona_datos_servidor = document.getElementById("zona_datos_servidor");
    zona_progreso = document.getElementById("zona_progreso");
    var boton = document.getElementById("boton");
    boton.addEventListener("click", leer_video, false);
}

function leer_texto() {
    var url = "texto.txt";
    var solicitud = new XMLHttpRequest();
    solicitud.addEventListener("load", mostrar, false);
    solicitud.open("GET", url, true);
    solicitud.send(null);
}

function leer_video() {
    var url = "video.mp4";
    var solicitud = new XMLHttpRequest();
    solicitud.addEventListener("loadstart", crece_barra, false); //Empieza la petición
    solicitud.addEventListener("progress", estado_barra, false); //Se ejecuta cada 50ms hasta finalice
    solicitud.addEventListener("load", mostrar, false);//Finaliza la petición
    solicitud.open("GET", url, true);
    solicitud.send(null);
}

function crece_barra() {
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
    zona_datos_servidor.innerHTML = "Vídeo Cargado";
}

window.addEventListener("load", comenzar, false);

//Solo funciona en el servidor
//Para pruebas almacenar en sevidor local
