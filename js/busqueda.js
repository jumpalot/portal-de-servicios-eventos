$(document).ready( () => {
    cargarCates();
    cargarBusqueda();
    $('.selectpicker').selectpicker();
} )
function cargarCates() {
    $.post(
        './controller/public/search/filtros.php',
        {
            tipo:tipo,
            subtipo:subtipo
        },
        msg => $('#sectionCates').html(msg)
    )
}
function cargarBusqueda() {
    $.post(
        './controller/public/search/resultados.php',
        {
            tipo:tipo,
            subtipo:subtipo,
            zona:zona,
            buscando:buscando
        },
        msg => $('#sectionSearch').html(msg)
    )
}
function iraDetalle(id){
    [idPub, tipo] = id.split('-');
    window.location="http://portalgardey.escuelarobertoarlt.com.ar/?section=detalle&tipo="+tipo+"&idPub="+idPub;
}