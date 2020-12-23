<?php
    $tipo = $_GET['tipo'];

    if ($tipo=='salon'):
        $seccion = 'Salones';
        $categorias = &$tpsal;
    else:
        $seccion = 'Servicios';
        $categorias = &$tpser;
    endif;

    include './view/public/categorias/tituloCategorias.php';

    while ($categoria = $categorias->fetch_object()):
        $nombre = $categoria->nombre;
        $fotocate = getFotoCate($tipo, $categoria->id);
        $foto = './img/'.$fotocate->idUsu.'/'.$tipo.'/'.$fotocate->foto ?? './img/proximamente.png';
        include './view/public/categorias/categoria.php';
    endwhile;

    include './view/public/categorias/cierreCategorias.html';
?>