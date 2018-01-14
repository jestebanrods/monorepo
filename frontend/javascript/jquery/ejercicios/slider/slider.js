$(document).ready(function() {
    // Busqueda de elementos
    var $lis = $("li"),
        $imagenes = $lis.find("img"),
        activo = 0,
        cantidad = $imagenes.length;

    // Ocultar imagenes
    $lis.hide();

    // Eliminar las imagenes y asociarlas como fondo de su contendero
    $imagenes.each(function(i, elemento) {
        $lis.eq(i).css({
            "background-image": "url(" + $(elemento).attr("src") + ")",
            "background-size": "cover",
            "background-position": "center center",
            "position": "absolute"
        });
        $(elemento).remove();
    });

    // Mostrar la primera imagen
    $lis.eq(activo).fadeIn();
    
    // Poner a la escucha los botones
    $("a").click(function() {
        switch ($(this).attr("id")) {
            case "derecha":
                activo += 1;
                break;
            case "izquierda":
                activo -= 1;
                break;
            default:
                break;
        }
        if (activo > cantidad - 1) {
            activo = 0;
        }
        if (activo < 0) {
            activo = cantidad - 1;
        }
        $lis.hide().eq(activo).fadeIn();
    });
});
