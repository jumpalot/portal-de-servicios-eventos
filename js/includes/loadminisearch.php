<script>
    $(document).ready( () => {
        $('#buscando').attr("placeholder", "Búsqueda de <?=$_GET['tipo']?>");
    })
    function cargarBusqueda() {
        window.location="./?section=search&zonas=&tipo=<?=$_GET['tipo']?>&buscando="+$('#buscando').val();
    }
</script>