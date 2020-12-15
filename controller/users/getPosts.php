<?php
    function listarPublis($publis, $usrId, $tipo){
        $cont = 0;
        while($pub = $publis->fetch_object()):
            $cont++;
            //bind
            $zona = $pub->zona;
            $titulo = $pub->nombre;
            $desc = strip_tags($pub->descripcion);
            $pubId = $pub->id;
            $desc = $pub->descuento;
            //imagen y mostrar segun nivel
            if($pub->nivel>0){
                $img = "./img/$usrId/$tipo/".$pub->foto;
                if($pub->nivel>1) include('../../view/users/listPost/pro.php');
                else include('../../view/users/listPost/basic.php');
            } else include('../../view/users/listPost/free.php');
        endwhile; 
        return $cont;
    }
    include('../../model/db.php');
    session_start();
    $usrId = $_SESSION['usrId'];
    [$servicios, $salones] = getPublis($usrId);
    $cont = 0;
    $cont += listarPublis($servicios, $usrId, 'servicios');
    $cont += listarPublis($salones, $usrId, 'salon');
    if ($cont==0)
        echo '<h5> No tiene ninguna publicación </h5>';
?> 