<?php
    include '../../model/db.php';

    $pagina = $_POST['pagina'];

    $promos = getPromos($pagina);

    foreach ($promos as $promo):

        $tipo = ($promo["id_salon"])?'salon':'servicios';

        $idPub = $promo["id_$tipo"];
        $idUsu = $promo["usuario$tipo"];
        $nomFoto = $promo["foto$tipo"];
        $subtipo = $promo ["subtipo$tipo"];
        
        $titulo = $promo['titulo'];
        $limite = $promo['limite'];
        
        $foto = "./img/$idUsu/$tipo/$nomFoto";

        include '../../view/public/promociones/promo.php';

    endforeach;
?>