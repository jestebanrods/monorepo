$(document).ready(() => {
    // Cargamos el snippet de navegación lateral
    $.get('social.html').done((respuesta) => {
        $('.lateral').append($(respuesta));
    });
    // Adoptar
    const $candidatos = $('.adoptar').children('input');
    $candidatos.on('click.gatos', (evt) => {
        evt.preventDefault();
        // Obteniendo los datos de los candidatos a adopción
        $.getJSON('adopcion.php').then(mostrarCandidatos)
            .fail(error => console.error(Error(error)))
            .always(() => console.info('Request finalizado'));
        // Componer las fichas de los candidatos
        // e insertarlas en DOM
        function mostrarCandidatos(canditatos) {
            // Quitar evento click
            $candidatos.off("click.gatos");
            $.each(canditatos, (indice, candidato) => {
                $(`<div>
                        <h4>
                            ${candidato.nombre}
                            <i>(${candidato.edad})</i>
                        </h4>
                        <h5>${candidato.info}</h5>
                  </div>`)
                  .css('background-image', `url(${candidato.imagen})`)
                  .appendTo($('.candidatos'));
            });
        }
    }).on('click.mensaje', (event) => {
        event.preventDefault();
        alert("Gracias");
    });
});
