<?php
    include '../../model/db.php';
    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_POST['tipo'];
    $idPub = $_POST['idPub'];
    $fotos = getFotosPubli($tipo, $idPub, $idUsu);
    $fotoP = getFotoP($tipo, $idPub, $idUsu);

    echo '<div class="col-md-12 p" id="form-dz-edit"></div>';
    
    while ($fotof = $fotos->fetch_object()){
        $nombre = $fotof->foto;
        $idFoto = $fotof->idFoto;
        $foto = "./img/$idUsu/$tipo/$nombre";
        $checked = ($idFoto==$fotoP)?'checked':'';
        include '../../view/users/itemEditFoto.php';
    }
?>