function prueba() {
    var variable = "Hola";

    function funcionInterna() {
        console.log(variable);
    }

    return funcionInterna;
}

var variableExterna = prueba();
variableExterna();

function esperar(mensaje) {
    setTimeout(function() {
        console.log(mensaje);
    }, 2000);
}

esperar("Hola Jossie");

for (var i = 1; i <= 5; i++) {
    (function(z) {
        setTimeout(function() {
            console.log(z);
        }, z * 1000);
    })(i);
};
