<?php
    include './db.php';
    $zona = $_POST['zona'];
    if (addZonas($zona))
        echo 'Se añadio correctamente la zona';
    else
        echo 'Ocurrio un error al añadir la zona';
?>