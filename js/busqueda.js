$(document).ready( () => {
    initSearchBar();
    cargarCates();
    cargarBusqueda();
} )
function cargarCates() {
    $.post(
        './controller/public/search/filtros.php',
        {
            tipo:tipo,
            subtipo:subtipo,
            zona:zona
        },
        msg => {
            $('#sectionCates').html(msg);
            $('.selectpicker').selectpicker();
            $('#filtroZona').change( () => {
                zona = $('#filtroZona').val()
                cargarBusqueda()
            });
            $('#filtroSubtipo').change( () => {
                subtipo = $('#filtroSubtipo').val()
                cargarBusqueda()
            });

        }
    )
}
function cargarBusqueda() {
    $.post(
        './controller/public/search/resultados.php',
        {
            tipo:tipo,
            subtipo:subtipo,
            zona:zona,
            buscando:$('#buscando').val()
        },
        msg => $('#sectionSearch').html(msg)
    )
}
function iraDetalle(id){
    [idPub, tipo] = id.split('-');
    window.open("http://portalgardey.escuelarobertoarlt.com.ar/?section=detalle&tipo="+tipo+"&idPub="+idPub, '_blank');
}
function initSearchBar(){
    $('#buscando').val(buscando)
    $('#buscando').keyup(()=>cargarBusqueda())
    $('#buscando').attr("placeholder", "Búsqueda de "+tipo);
}