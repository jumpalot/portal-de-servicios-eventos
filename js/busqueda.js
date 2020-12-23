$(document).ready( () => {
    cargarCates(tipo, subtipo);
    cargarBusqueda(tipo, subtipo);
} )
function cargarCates(tipo, subtipo){
    $.post(
        './controller/public/search/filtros.php',
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
        msg => $('#sectionSearch').html(msg)
    )
}
function iraDetalle(id){
    [idPub, tipo] = id.split('-');
    window.location="http://portalgardey.escuelarobertoarlt.com.ar/?section=detalle&tipo="+tipo+"&idPub="+idPub;
}