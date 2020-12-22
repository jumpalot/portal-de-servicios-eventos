<?php
    $idPub=$_GET['idPub'];
    $tipo = $_GET['tipo'];
    $datos = getServicio($idPub);
    $idUsu = $datos->idUsu;

    echo '<h5 id="breadcrumb">HOME / <?=$seccion?> / <?=$titulo?></h5>';
    echo '<section id="wrapper-detalle">';
    
    //banner
    $seccion = 'Servicios';
    $titulo = $datos->titulo;
    $banner = $datos->foto;
    include('./view/public/banners/detalle.php');

    //body
    $body = $datos->descripcion;
    $volanta =($datos->descuento!="0")?$$datos->descuento.'% OFF':"";
    include('./view/public/ideas/cuerpo.php');
    
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
    $fb = ($datos->fb=="NULL")? null : $datos->fb;
    $tw = ($datos->tw=="NULL")? null : substr($datos->tw, 1);
    $ig = ($datos->ig=="NULL")? null : substr($datos->ig, 1);
    $web = ($datos->web=="NULL")? null : $datos->web;
    include('./view/public/infoContacto.php');
    
    //contacto
    include('./view/public/columContacto.html');

    echo '</section>';
    ?>    