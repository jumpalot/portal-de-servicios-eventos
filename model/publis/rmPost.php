<?php
    include("../db.php");
    session_start();
    $idUsu = $_SESSION['usrId'];
    $idPub = $_POST['idPub'];
    $tipo = $_POST['tipo'];
    if (rmPubli($tipo, $idPub, $idUsu)){
        $fotos = getFotosPubli($tipo, $idPub);
        rmImgFromDb($fotos, "../../img/$idUsu/");
    }
?>