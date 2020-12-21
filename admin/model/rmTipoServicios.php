<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $ts = $_POST['ts'];
        if (rmTipoServicio($ts))
            echo 'Se elimino correctamente el tipo de servicio';
        else
            echo 'Ocurrio un error al eliminar el tipo de servicio';
    }
?>