<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $ts = $_POST['ts'];
        if (rmTipoSalon($ts))
            echo 'Se elimino correctamente el tipo de salon';
        else
            echo 'Ocurrio un error al eliminar el tipo de salon';
    }
?>