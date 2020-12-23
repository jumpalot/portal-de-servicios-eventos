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

    foreach ($categorias as $categoria):
        $nombre = $categoria['nombre'];
        $fotocate = getFotoCate($tipo, $categoria['id']);
        $foto = './img/'.$fotocate->idUsu.'/'.$tipo.'/'.$fotocate->foto ?? './img/proximamente.png';
        include './view/public/categorias/categoria.php';
    endforeach;

    include './view/public/categorias/cierreCategorias.html';
?>