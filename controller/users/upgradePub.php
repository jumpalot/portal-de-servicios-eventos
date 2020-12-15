<?php
    include('../../model/db.php');
    session_start();
    $idUsu = $_SESSION['usrId'];
    $idPub = $_POST['idPub'];
    $tipo = $_POST['tipo'];
    $check = array("", "", "", "");
    $check[getNivel($tipo, $idPub, $idUsu)] = 'checked';
    include('../../view/users/upgradePubBody.php');
?>