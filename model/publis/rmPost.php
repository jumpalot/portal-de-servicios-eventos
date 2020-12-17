<?php
    include("../db.php");
    include("./fotos/imgCache.php");
    session_start();
    $idUsu = $_SESSION['usrId'];
    $idPub = $_POST['idPub'];
    $tipo = $_POST['tipo'];
    $fotos = getFotosPubli($tipo, $idPub, $idUsu, true);
    if (rmPubli($tipo, $idPub, $idUsu)){
        rmImgFromDb($fotos, "../../img/$idUsu/$tipo/");
    }
?>