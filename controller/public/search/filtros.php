<h3>Filtros</h3>
<?php 
    include '../../../model/db.php';
    $tpszona=getZonas();
    $tipo = @$_POST['tipo'];
    $zonaActual = @$_POST['zona'];
    $subTipo = @$_POST['subtipo'];
    include '../../../view/public/busqueda/filtros/filtrosComunes.php';
    if($tipo=="servicios"){
        $tpsServicios=getTiposervicios();
        include '../../../view/public/busqueda/filtros/filtrosServicios.php';
    }else if($tipo=="salon"){
        $tpsSalones=getTiposalones();
        include '../../../view/public/busqueda/filtros/filtrosSalones.php';
    }
?>