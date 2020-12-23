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
    $cuerpo = "<h2 style=\"text-align: center;\">$asunto</h2>
               <h3style=\"color: #c1a152;\">Datos del evento</h3>
               <h4>Fecha</h4><h6>$fecha</h6>
               <h4>Cantidad</h4><h6>$cantidad</h6>
               <h3style=\"color: #c1a152;\">Datos de contacto</h3>
               <h4>Nombre</h4><h6>$nombre $apellido</h6>
               <h4>Email</h4><h6>$usrmail</h6>
               <h4>Telefono</h4><h6>$telefono</h6>
               <h3style=\"color: #c1a152;\">Comentarios</h3>
               <p style=\"text-align: justify; width: 20em;\">$comentarios</p>
               ";

    echo sendMail($dest, $asunto, $cuerpo);
?>