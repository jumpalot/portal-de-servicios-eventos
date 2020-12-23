<?php
    include '../../model/db.php';
    session_start();
    $usuario = getUsuario($_SESSION['usrId']);
    $nombre = $usuario->nombre;
    $telefono = $usuario->telefono;
    include '../../view/users/profile/profileBody.php';
?>