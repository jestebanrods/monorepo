$(document).ready(function() {
    var titulo = $("h1");
    $("aside").children("input").keyup(function(event) {
        var letraOprimida = event.which;
        if (letraOprimida == 13) { //Enter en ASCII
            titulo.text($(this).val());
        }
    });
});
