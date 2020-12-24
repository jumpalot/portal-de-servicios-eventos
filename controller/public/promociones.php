<?php
    include '../../model/db.php';

    $pagina = $_POST['pagina'];

    $promos = getPromos($pagina);

    $alternador = true;
    foreach ($promos as $promo):

        $tipo = ($promo["id_salon"])?'salon':'servicios';

        $idPub = $promo["id_$tipo"];
        $idUsu = $promo["usuario$tipo"];
        $nomFoto = $promo["foto$tipo"];
        $subtipo = $promo ["subtipo$tipo"];
        
        $titulo = $promo['titulo'];
        $limite = $promo['limite'];
        
        $foto = "./img/$idUsu/$tipo/$nomFoto";

        if ($alternador) echo '<div class="row row-cols-1 row-cols-md-2">';
        include '../../view/public/promociones/promo.php';
        if(!$alternador) echo '</div>';

    endforeach;
?>