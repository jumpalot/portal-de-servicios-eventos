$(document).ready( () => {
    cargarCates(tipo, subtipo);
    cargarBusqueda(tipo, subtipo);
} )
function cargarCates(tipo, subtipo){
    $.post(
        './controller/public/search/categorias.php',
        {
            tipo:tipo,
            subtipo:subtipo
        },
        msg => $('#sectionCates').html(msg)
    )
}
function cargarBusqueda(tipo, subtipo){
    $.post(
        './controller/public/search/resultados.php',
        {
            tipo:tipo,
            subtipo:subtipo
        },
        msg => $('#listprosectionSearchmos').html(msg)
    )
}