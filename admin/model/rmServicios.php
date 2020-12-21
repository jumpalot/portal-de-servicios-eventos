<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $email = $_POST['email'];
        $servicios = $_POST['servicios'];
        if (rmServicios($servicios))
            echo 'Se elimino correctamente el servicio';
        else
            echo 'Ocurrio un error al eliminar el servicio';
    }
?>