<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $zona = $_POST['zona'];
        if (rmZona($zona))
            echo 'Se elimino correctamente la zona';
        else
            echo 'Ocurrio un error al eliminar la zona';
    }
?>