$(document).ready(function() {
    var parrafos = $("body").find("section").children("p");
    $(".prueba").animate({
        padding: "2px"
    }, function() {
        $(this).animate({
            padding: "20px"
        });
    });

    $("h1").addClass("animated flash");
});
