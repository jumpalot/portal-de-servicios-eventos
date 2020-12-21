<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $email = $_POST['email'];
        $servicios = getServiciosByEmail($email);
        while($servicio = $servicios->fetch_object())
            echo $servicio->id.','.$servicio->nombre.';';
    }
?>