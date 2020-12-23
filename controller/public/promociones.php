<?php
    include '../../model/db.php';

    $pagina = $_POST['pagina'];

    $promos = getPromos($pagina);

    $alternador = true;
    while($promo = $promos->fetch_object()):

        if ($promo->id_salon!="NULL"){
            $tipo = 'salon';
            $idPub = $promo->id_salon;
        } else {
            $tipo = 'servicios';
            $idPub = $promo->id_servicios;
        }

        $titulo = $promo->titulo;
        $limite = $promo->limite;

        if ($alternador) echo '<div class="row row-cols-1 row-cols-md-2">';
        include '../../view/public/promociones/promo.php';
        if(!$alternador) echo '</div>';

    endwhile;
?>