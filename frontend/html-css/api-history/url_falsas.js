var zona_datos;

function comenzar() {
    zona_datos = document.getElementById("zona_datos");
    var url = document.getElementById("url");
    url.addEventListener("click", cambia_url_principal, false);
    window.addEventListener("popstate", nueva_url, false);
    window.history.replaceState(1, null);
}

function cambia_url_principal() {
    mostrar_url(2);
    window.history.pushState(2, null, "pagina2");
}

function nueva_url(e) {
    mostrar_url(e.state);
}

function mostrar_url(actual) {
    zona_datos.innerHTML = "<h2>Estás En La Página " + actual + "</h2>";
}

window.addEventListener("load", comenzar, false);