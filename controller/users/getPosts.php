<?php
    function listarPublis($publis, $usrId, $tipo){
        while($pub = $publis->fetch_object()):
            //bind
            $zona = $pub->zona;
            $titulo = $pub->nombre;
            $desc = substr($pub->descripcion, 0, 250).'...';
            $pubId = $pub->id;
            //imagen y mostrar segun nivel
            if($pub->nivel>0){
                $img = "./img/$usrId/".$pub->foto;
                if($pub->nivel>1) include('../../view/users/listPost/pro.php');
                else include('../../view/users/listPost/basic.php');
            } else include('../../view/users/listPost/free.php');
        endwhile; 
    }
    include('../../model/db.php');
    session_start();
    $usrId = $_SESSION['usrId'];
    [$servicios, $salones] = getPublis($usrId);
    listarPublis($servicios, $usrId, 'ser');
    listarPublis($salones, $usrId, 'sal');
?> 