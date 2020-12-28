<?php
    #incluir librerias
        include '../email.php';
    #recibir datos
    $dest = "portalservicioseventos@outlook.com";
    $usrmail = $_POST['email'];
    $titulo = $_POST['titulo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $comentarios = $_POST['comentarios'];
    
    $asunto = "Motivo del mensaje $titulo";
    $cuerpo =  "<div style=\"text-align: center;\">
                <h1>$asunto</h1>
                <h2 style=\"color: #c1a152;\">Datos de contacto</h2>
                <h3>Nombre</h3><h4>$nombre $apellido</h4>
                <h3>Email</h3><h4>$usrmail</h4>
                <h3>Telefono</h3><h4>$telefono</h4>
                <h2 style=\"color: #c1a152;\">Comentarios</h2>
                <div style=\"text-align: -webkit-center;\">
                    <p style=\"text-align: justify; width: 25em;\">$comentarios</p>
                </div>";

       
    #enviar email
        echo sendMail($dest, $asunto, $cuerpo);
            echo '<h4>Mensaje enviado</h4>';
    #hacer echo de lo que se vera en el modal resultado

?>