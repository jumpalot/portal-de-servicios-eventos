$(document).ready( () => {
    cargarCates();
    cargarBusqueda();
    $('#buscando').keyup(()=>cargarBusqueda())
} )
function cargarCates() {
    $.post(
        './controller/public/search/filtros.php',
        {
            tipo:tipo,
            subtipo:subtipo
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
    window.location="http://portalgardey.escuelarobertoarlt.com.ar/?section=detalle&tipo="+tipo+"&idPub="+idPub;
}