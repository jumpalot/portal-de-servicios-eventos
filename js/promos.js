var pagina = 1;
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
        './controller/promociones.php',
        {pagina:pagina},
        msg => {
            $('#listpromos').append(msg)
        }
    )
}