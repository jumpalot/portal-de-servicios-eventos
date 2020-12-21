<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        include '../../model/publis/fotos/imgCache.php';
        $email = $_POST['email'];
        $idUsu = getIdUsu($email);
        if (rmUsuario($email)){
            echo 'Se elimino correctamente el usuario';
            if ($idUsu==null || !rmTree("../../img/$idUsu"))
                echo '. Pero no pudieron eliminarse sus imagenes';
        }
        else
            echo 'Ocurrio un error al eliminar el usuario';
    }
?>