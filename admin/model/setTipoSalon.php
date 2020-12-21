<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $ts = $_POST['ts'];
        if (addTipoSalon($ts))
            echo 'Se añadio correctamente el tipo de salon';
        else
            echo 'Ocurrio un error al añadir el tipo de salon';
    }
?>