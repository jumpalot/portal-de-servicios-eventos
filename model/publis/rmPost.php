<?php
    include("../db.php");
    $idPub = $_POST['idPub'];
    $tipo = $_POST['tipo'];
    $idUsu = $_SESSION['usrId'];
    rmPubli($tipo, $idPub, $idUsu);
?>