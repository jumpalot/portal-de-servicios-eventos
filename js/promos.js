var pagina = 0;
const cantXpag = 4;
var total = 0;
$(document).ready( () => {
    cargarPromos();
    verificarCargarMas();
    $.post( './model/publis/getTotalPromos.php', res => total = res );
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
    if(total>maxActual)
        $('div.fuente-prom').removeClass('hidden');
    else
        $('div.fuente-prom').addClass('hidden');
}