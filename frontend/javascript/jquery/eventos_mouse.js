$(document).ready(function() {
    var parrafos = $(".parrafos").children("p");

    // -------------------------------------------------------
    // Click
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

    // -------------------------------------------------------
    // Click Derecho
    $("li").filter(function() {
        return $(this).text() === "Enlace 5";
    }).on("contextmenu", function(event) {
        event.preventDefault();
        $(this).css({ color: "red" });
    });

    // -------------------------------------------------------
    // Doble Click
    $("li").filter(function() {
        return $(this).text() === "Enlace 5";
    }).on("dblclick", function(event) {
        event.preventDefault();
        $(this).css({ color: "blue" });
    });

    // -------------------------------------------------------
    // Por Encima
    $("li").filter(function() {
        return $(this).text() === "Enlace 10";
    }).hover(function() {
        console.log("Entro");
        $(this).css({ color: "blue" });
    }, function() {
        console.log("Salgo");
        $(this).css({ color: "red" });
    });
});
