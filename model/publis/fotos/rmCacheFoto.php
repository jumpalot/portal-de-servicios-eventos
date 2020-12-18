<?php
    $foto = $_POST['foto'];
    session_start();
    $idUsu = $_SESSION['usrId'];
    $dir = "../../../img/$idUsu/cache/";
    unlink($dir.$foto);
?>