<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        include '../../model/publis/fotos/imgCache.php';
        $email = $_POST['email'];
        $servicios = $_POST['servicios'];
        $idUsu = getIdUsu($email);
        if($idUsu!=null){
            $fotos = getFotosPubli('servicios', $idPub, $idUsu);
            if (rmServicios($servicios)){
                rmImgFromDb($fotos, "../../img/$idUsu/servicios/");
                echo 'Se elimino correctamente el servicio';
            }
        } else echo 'Ocurrio un error al eliminar el servicio';
    }
?>