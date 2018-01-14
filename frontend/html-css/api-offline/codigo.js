function comenzar() {
    var cache = window.applicationCache;
    cache.addEventListener("error", errores, false);
}

function errores() {
    alert("No Se puede Descargar");
}
window.addEventListener("load", comenzar, false);
