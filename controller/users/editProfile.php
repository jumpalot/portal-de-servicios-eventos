<?php
    include '../../model/db.php';
    session_start();
    $usuario = getUsuario($_SESSION['usrId']);
    $nombre = $usuario->nombre;
    $telefono = $usuario->telefono;
    $ig = $usuario->ig;
    $tw = $usuario->tw;
    $web = $usuario->web;
    $fb = $usuario->fb;
    include '../../view/users/profile/editProfileBody.php';
?>