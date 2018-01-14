$(document).ready(function() {
    var enlace = $("<a href=\"#\">Enlace</a>");
    // Antes de cada parrafo
    $("section").find("p").before(enlace);
    // Dentro de cada parrafo pero al inicio
    $("section").find("p").prepend(enlace);
    // Dentro de cada parrafo pero al final
    $("section").find("p").append(enlace);
    // Borrar el ultimo parrafo
    $("section").find("p").last().remove();
});
