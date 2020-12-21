<?php
    $idPub=$_GET['idPub'];
    $datos = getServicio($idPub);
    $idUsu = $datos->idUsu;

    echo '<section class="col-9">';
    
    //banner
    $seccion = 'Servicios';
    $titulo = $datos->titulo;
    $banner = $datos->foto;
    echo "<h5>HOME / $seccion / $titulo</h5>";
    include('./view/public/banners/detalle.php');

    //body
    $body = $datos->descripcion;
    $volanta =($datos->descuento!="0")?$$datos->descuento.'% OFF':"";
    include('./view/public/ideas/cuerpo.php');

    //contacto
    include('./view/public/columContacto.html');

    //infoPub
    $zona = $datos->zona;
    $subtipo= $datos->tipo;
    include('./view/public/infoServicios.php');

    //carousel
    include('./view/public/carousel/carouselTop.html');
    $fotos = getFotosPubli('servicios', $idPub, $idUsu);
    $img = array();
    $cont=0;
    $active="active";
    foreach($fotos as $foto){
        if (++$cont==4){
            include('./view/public/carousel/ideaItem.php');
            if($active!="") $active="";
            $cont=0;
            $img = array();
        }
        $img[$cont] = $foto['foto'];
    }
    if(isset($img[1])) 
        include('./view/public/carousel/ideaItem.php');
    include('./view/public/carousel/carouselEnd.html');

    //infocontacto
    $nombreUsu = $datos->nombreUsu;
    $telefono = $datos->telefono;
    $email = $datos->email;
    $fb = $datos->fb;
    $tw = $datos->tw;
    $ig = $datos->ig;
    $web = $datos->web;
    include('./view/public/infoContacto.php');

    echo '</section>';
?>    