<?php
    include '../../../model/db.php';
    $tipo = @$_POST['tipo'];
    $subtipo = @$_POST['subtipo'];
    $zona = @$_POST['zona'];
    $buscando = @$_POST['buscando'];
    if($tipo=="servicios"){
        $tps = MegagetServicios($subtipo, $zona, $buscando);
    }else if($tipo=="salon"){
        $capacidad = @$_POST['capacidad'];
        $tps = MegagetSalones($subtipo, $zona, $buscando, $capacidad);
    }
    if($tps){
        while($tp = $tps->fetch_object()): 
            if ($tp->nivel=="2"){
                include '../../../view/public/busqueda/items/pro.php';
            } else if ($tp->nivel=="1"){
                include '../../../view/public/busqueda/items/basic.php';
            } else {
                include '../../../view/public/busqueda/items/free.php';
            }
        endwhile;
    }
?>