<?php
    include '../../model/db.php';
    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];
    $nivel = $_POST['nivel'];
    if (upPub($nivel, $tipo, $idPub, $idUsu)){
        if ($nivel!='0') {
            echo '
                <h3>Compra Relizada con Exito</h3>
                <h5>Puede cambiar la imagen principal desde "Editar fotos"</h5>
            ';
            if ($nivel=='2')
                echo '<h5>Ahora puede añadir descuentos desde "Editar Publicación"</h5>';
        }
        else {
            echo '
                <h3>Cambio correctamente realizado</h3>
                <h5>Puede volver a comprar una mejora cuando lo desee</h5>
            ';
        }
    } else {
        echo ' 
            <h3>Ocurrió un error al cambiar el nivel de su publicación</h3>
            <h5>Por favor, vuelva a intentarlo en unos minutos</h5>
        ';
    }
?>