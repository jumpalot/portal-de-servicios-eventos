<?php
    include('model/accounts/session.php');

    include('model/db.php');

    if ($loggedIn) $usuario = getUsuario($_SESSION['usrId']);

?>