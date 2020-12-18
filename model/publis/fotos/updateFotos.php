<?php
    include '../../db.php';
    include './imgCache.php';

    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];

    $nFotoP = $_POST['nFotoP'];
    $fotoP = $_POST['fotoP'];
    $trash = $_POST['trash'];

    $dir = "../../../img/$idUsu/cache/";
    
    $imgCache = getImgCache($dir);
    if (count($imgCache)>0){
        if (addImgs($tipo, $idPub, $imgCache)) {
            mvImgCache($imgCache, $dir, $tipo);
            echo '<h5>Nuevas fotos añadidas</h5>';
        } else {
            echo '<h5>No se pudieron subir sus nuevas fotos</h5>';
        }
    }
    
    if($trash!=""){
        $trash = explode('-', $trash);
        $borrablesResult = getFotosPubli($tipo, $idPub, $idUsu, true);
        $toDel = array();

        while ($borrable = $borrablesResult->fetch_object())
            if (in_array($borrable->idFoto, $trash))
                array_push($toDel, $borrable->foto);

        if(rmFotosPubli($tipo, $idPub, $idUsu, $trash)){
            rmImgCache($toDel, "$dir../$tipo/");
            echo '<h5>Fotos eliminadas con exito</h5>';
        } else {
            echo '<h5>Ocurrio un error al eliminar sus fotos</h5>';
        }
    }

    if( $fotoP!=$nFotoP ) {
        if ( setFotoP($tipo, $idPub, $idUsu, $nFotoP) ){
            echo '<h5>Foto principal correctamente modificada</h5>';
        } else {
            echo '<h5>Ocurrión un error al modificar la foto principal</h5>';
        }
    } 

?>