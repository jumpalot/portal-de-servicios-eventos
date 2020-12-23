<?php
    include '../db.php';

    session_start();
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];

    $titulo = $_POST['titulo'];
    $limite = $_POST['fecha'];

    if(addPromo($titulo, $limite, $tipo, $idPub))
        echo '<h5>Se añadio correctamente su promocion</h5>';
    else{
        echo '<h5>Ocurrio un error al añadir su promocion</h5>';
        echo '<h5>Verifique los datos y vuelva a intentarlo más tarde</h5>';
    }
?>