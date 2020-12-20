<?php
    include './db.php';
    $ts = $_POST['ts'];
    if (addTipoServicio($ts))
        echo 'Se añadio correctamente el tipo de servicio';
    else
        echo 'Ocurrio un error al añadir el tipo de servicio';
?>