<?php
    include '../../model/db.php';
    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];
    $fotos = getFotosPubli($tipo, $idPub, $idUsu);
    $fotoP = getFotoP($tipo, $idPub, $idUsu);

    echo '<div class="col-md-12 p" id="form-dz-edit"></div>';
    
    while ($fotof = $fotos->fetch_object()){
        $nombre = $fotof->foto;
        $idFoto = $fotof->idFoto;
        $foto = "./img/$idUsu/$tipo/$nombre";
        $checked = ($idFoto==$fotoP)?'id="originalFotoP" checked':'';
        include '../../view/users/itemEditFoto.php';
    }
?>