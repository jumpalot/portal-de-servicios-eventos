<?php
    include '../../model/db.php';
    $usuario = getUsuario($_SESSION['usrId']);
    $nombre = $usuario->nombre;
    include '../../view/users/profile/editProfileBody.php';
?>