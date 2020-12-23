<?php
    include '../../../model/db.php';
    if(@$_POST['tipo']=="servicios"){
        $tps = MegagetServicios(@$_POST['subtipo']);
    }else if(@$_POST['tipo']=="salon"){
        $tps = MegagetSalones(@$_POST['subtipo']);
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