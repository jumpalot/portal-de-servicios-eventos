<?php
    include('../../model/db.php');
    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];
    $check = array("", "", "", "");
    $check[getNivel($tipo, $idPub, $idUsu)] = 'checked';
    include('../../view/users/upgradePub/upgradePubBody.php');
?>