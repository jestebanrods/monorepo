$(document).ready(function() {
    $(".panel").click(function(evento) {
        evento.preventDefault();
        $(".contenido").not(this).each(function() {
            $(this).slideUp();
        });
        $(this).children().next().slideToggle();
    });
});
