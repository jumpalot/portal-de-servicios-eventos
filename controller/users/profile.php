<?php
    include '../../model/db.php';
    session_start();
    $usuario = getUsuario($_SESSION['usrId']);
    $nombre = $usuario->nombre;
    $telefono = $usuario->telefono;
    $correo = $usuario->correo;
    include '../../view/users/profile/profileBody.php';
?>