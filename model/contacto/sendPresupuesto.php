<?php
    include '../email.php';

    $dest = $_POST['destinatario'];
    $usrmail = $_POST['email'];
    $titulo = $_POST['titulo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cantidad'];
    $comentarios = $_POST['comentarios'];

    $asunto = "Solicitud de presupuesto $titulo";
    $cuerpo =  "<div style=\"text-align: center;\">
                <h1>$asunto</h1>
                <h2 style=\"color: #c1a152;\">Datos del evento</h2>
                <h3>Fecha</h3><h5>$fecha</h5>
                <h3>Cantidad</h3><h5>$cantidad</h5>
                <h2 style=\"color: #c1a152;\">Datos de contacto</h2>
                <h3>Nombre</h3><h5>$nombre $apellido</h5>
                <h3>Email</h3><h5>$usrmail</h5>
                <h3>Telefono</h3><h5>$telefono</h5>
                <h2 style=\"color: #c1a152;\">Comentarios</h2>
                <div style=\"text-align: -webkit-center;\">
                    <p style=\"text-align: justify; width: 25em;\">$comentarios</p>
                </div>";

    echo sendMail($dest, $asunto, $cuerpo);
?>