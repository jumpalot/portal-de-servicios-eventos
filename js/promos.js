var pagina = 0;
const cantXpag = 4;
$(document).ready( () => {
    cargarPromos();
    verificarCargarMas();
    $('#cargarMas').on('click', async function(e) {
        e.preventDefault();
        pagina++;
        cargarPromos();
    });
});
function cargarPromos(){
    $.post(
        './controller/public/promociones.php',
        {pagina:pagina},
        msg => {
            $('#listpromos').append(msg)
            verificarCargarMas();
        }
    )
}
function verificarCargarMas(){
    let maxActual = ( pagina + 1 ) * 4;
    if($('#listpromos .card').length<maxActual)
        $('div.fuente-prom').addClass('hidden');
}