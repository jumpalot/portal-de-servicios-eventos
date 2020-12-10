<?php
    $foto = $_POST['foto'];
    $idUsu = $_POST['idUsu'];
    $dir = "../../../img/$idUsu/cache/";
    unlink($dir.$foto);
?>