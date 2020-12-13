<?php
    include("../db.php");
    session_start();
    $idUsu = $_SESSION['usrId'];
    $idPub = $_POST['idPub'];
    $tipo = $_POST['tipo'];
    rmPubli($tipo, $idPub, $idUsu);
?>