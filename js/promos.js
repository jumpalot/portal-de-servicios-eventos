var pagina = 0;
$(document).ready( () => {
    cargarPromos();
    $('#cargarMas').on('click', e => {
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
        }
    )
}