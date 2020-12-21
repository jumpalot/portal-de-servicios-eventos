<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        include '../../model/publis/fotos/imgCache.php';
        $email = $_POST['email'];
        $salon = $_POST['salon'];
        $idUsu = getIdUsu($email);
        if($idUsu!=null){
            $fotos = getFotosPubli('salon', $salon, $idUsu);
            if (rmSalon($salon)){
                rmImgFromDb($fotos, "../../img/$idUsu/salon/");
                echo 'Se elimino correctamente el salon';
            }
        } else echo 'Ocurrio un error al eliminar el salon';
    }
?>