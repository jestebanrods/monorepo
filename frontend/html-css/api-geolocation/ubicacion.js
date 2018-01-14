function comenzar() {
    var geo = document.getElementById("dame_ubicacion");
    geo.addEventListener("click", obtener_pos, false);
}

function obtener_pos() {
    var parametros = {
        enableHighAccuracy: true,
        timeout: 10000,
        maximumAge: 60000
    };
    var localizacion = navigator.geolocation;
    localizacion.getCurrentPosition(ubicar_pos, errores_pos, parametros);
    //Cada maximumAge Busca Posición
    //localizacion.watchPosition(ubicar_pos, errores_pos, parametros);
}

function ubicar_pos(position) {
    var ubicacion = document.getElementById("ubicacion");
    var mapa = document.getElementById("mapa");
    var mi_ubicacion = "";
    var mi_mapa = "";
    mi_ubicacion = "Latitud: " + position.coords.latitude + "<br>";
    mi_ubicacion += "Longitud: " + position.coords.longitude + "<br>";
    mi_ubicacion += "Exactitud: " + position.coords.accuracy + "<br>";
    ubicacion.innerHTML = mi_ubicacion;
    mi_mapa = "http://maps.googleapis.com/maps/api/staticmap?center" + position.coords.latitude + "," + position.coords.longitude + "," + "&zoom=12&size=400x400&sensor=false&markers=" + position.coords.latitude + "," + position.coords.longitude;
    mapa.innerHTML = "<div><img src= '" + mi_mapa + "'></div>";
}

function errores_pos(error) {
    var err = "Error: " + error.code + ". " + error.message;
    ubicacion.innerHTML = err;
}

window.addEventListener("load", comenzar, false);