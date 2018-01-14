$(document).ready(function() {
    // $.ajax('contenido.html ', {
    //     success: function(respuesta, estatus, peticion) {
    //         console.log(arguments);
    //         $("h1").after($(respuesta));
    //     },
    //     error: function(peticion, tipoError, mensaje) {
    //         console.log(arguments);
    //     },
    //     complete: function(peticion, status) {
    //         console.log(arguments);
    //     },
    //     beforeSend: function() {},
    //     timeout: 1000
    // });

    // Modo JQuery 3.0 en adelante (Promise API)
    $.ajax('contenido.html')
        .done(function(respuesta) {
            $("h1").after($(respuesta));
        })
        .fail(function(peticion, tipoError, mensaje) {
            console.log(arguments);
        })
        .always(function(peticion, status) {
            console.log(arguments);
        })
});
