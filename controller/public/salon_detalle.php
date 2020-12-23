<?php
    function listar($datos){
        $ldatos = '';
        while ($dato = $datos->fetch_object())
        $ldatos .= $dato->nombre.' / ';
        return substr($ldatos, 0, -2);
    }

    $idPub = $_GET['idPub'];
    $tipo = $_GET['tipo'];

    $datos = getSalon($idPub);
    $espaciosdb = getEspaciosPub($datos->id);
    $lserviciosdb = getSalonlServicio($datos->id);

    $idUsu = $datos->idUsu;

    //titulo
    $seccion = 'salones';
    $titulo = $datos->titulo;
    echo "<h5 id=\"breadcrumb\">HOME / $seccion / $titulo </h5>";
    echo '<section id="wrapper-detalle">';
    
    //banner
    $banner = $datos->foto;
    include('./view/public/banners/detalle.php');

    //body
    $body = $datos->descripcion;
    $volanta =($datos->descuento!="0")?$$datos->descuento.'% OFF':"";
    include('./view/public/ideas/cuerpo.php');
    
    //infoPub
    $zona = $datos->zona;
    $subtipo= $datos->tipo;
    $capacidad = $datos->capacidad;
    $espacios = listar($espaciosdb);
    $servicios = listar($lserviciosdb);
    include('./view/public/infoSalon.php');
    
    //carousel
    include('./view/public/carousel/carouselTop.html');
    $fotos = getFotosPubli('salon', $idPub, $idUsu);
    $img = array();
    $cont=0;
    $contSecciones=1;
    $active="active";
    foreach($fotos as $foto){
        if (++$cont==4){
            include('./view/public/carousel/ideaItem.php');
            if($active!="") $active="";
            $cont=0;
            $img = array();
            $contSecciones++;
        }
        $img[$cont] = $foto['foto'];
    }
    if(isset($img[1])) 
        include('./view/public/carousel/ideaItem.php');
    include('./view/public/carousel/carouselEnd.html');
    
    //infocontacto
    $nombreUsu = $datos->nombreUsu;
    $telefono = '+'.((strlen($datos->telefono)>10)? $datos->telefono : '54'.$datos->telefono);
    $email = $datos->email;
    $fb = ($datos->fb=="NULL")? null : $datos->fb;
    $tw = ($datos->tw=="NULL")? null : substr($datos->tw, 1);
    $ig = ($datos->ig=="NULL")? null : substr($datos->ig, 1);
    $web = ($datos->web=="NULL")? null : $datos->web;
    include('./view/public/infoContacto.php');
    
    //contacto
    include('./view/public/columContacto.php');

    echo '</section>';
?>    