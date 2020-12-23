<?php
    include '../db.php';
    include '../publis/fotos/imgCache.php';
    session_start();
    $idUsu = $_SESSION['usrId'];
    if (rmUsuario($idUsu)){
        echo 'eliminado';
        rmTree("../../img/$idUsu");
    }
?>