$(document).ready(() => {
    $.ajax('contenido.html').done((respuesta) => {
        $("h1").after($(respuesta));
    });

    $("form").submit((evento) => {
        evento.preventDefault();
        $.ajax("servidor.php", {
            type: "POST",
            datatype: "json",
            data: {
                "nombre": $("#nombre").val(),
                "apellido": $("#apellido").val()
            }
        }).then((respuesta) => {
            var respuesta = JSON.parse(respuesta);
            console.log(respuesta);
            $("form").children("ol").prepend($(`
                <li>
                    ${respuesta.nombre} ${respuesta.apellido} -
                    <small>
                        ${respuesta.fecha.weekday}
                    </small>
                </li>
            `));
        });
    });
});
