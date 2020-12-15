<?php
    include("../db.php");
    include("./fotos/imgCache.php");
    session_start();
    $idUsu = $_SESSION['usrId'];
    $idPub = $_POST['idPub'];
    $tipo = $_POST['tipo'];
    if (rmPubli($tipo, $idPub, $idUsu)){
        $fotos = getFotosPubli($tipo, $idPub, $idUsu);
        rmImgFromDb($fotos, "../../img/$idUsu/$tipo/");
    }
?>