<?php
    include '../../model/db.php';
    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_POST['tipo'];
    $idPub = $_POST['idPub'];

    $nombres = getFotosPubli($tipo, $idPub, $idUsu);
    while ($nombre = $nombres->fetch_object()) echo $nombre;
    echo '<div class="col-md-12 p" id="dz-edit"></div>'
?>