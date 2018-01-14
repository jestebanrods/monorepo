$(document).ready(function() {
    var parrafos = $(".parrafos").children("p");

    $("li").filter(function() {
        return $(this).text() === "Mostrar";
    }).on("click", function(event) {
        event.preventDefault();
        if ($(this).text() === "Mostrar") {
            $(this).text("Ocultar");
        } else {
            $(this).text("Mostrar");
        }
        mostrarSecuencia(parrafos, 500);
    });

    function mostrarSecuencia(coleccion, tiempo) {
        coleccion.each(function(indice, elemento) {
            $(elemento).slideToggle(tiempo * (indice + 1));
        });
    }
});
