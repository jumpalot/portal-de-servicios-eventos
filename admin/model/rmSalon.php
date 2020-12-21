<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $email = $_POST['email'];
        $salon = $_POST['salon'];
        if (rmSalon($salon))
            echo 'Se elimino correctamente el salon';
        else
            echo 'Ocurrio un error al eliminar el salon';
    }
?>