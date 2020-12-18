<?php
    include("../db.php");
    include("./fotos/imgCache.php");

    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];

    $fotos = getFotosPubli($tipo, $idPub, $idUsu, true);
    if (rmPubli($tipo, $idPub, $idUsu)){
        rmImgFromDb($fotos, "../../img/$idUsu/$tipo/");
    }
?>