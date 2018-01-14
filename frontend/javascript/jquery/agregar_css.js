$(document).ready(function() {
    var enlace = $("aside").find("li").last();
    enlace.addClass("prueba");
    if (enlace.hasClass("prueba")) {
        console.log("Si");
        setTimeout(function() {
            enlace.removeClass("prueba");
        }, 2000);
    }
});
