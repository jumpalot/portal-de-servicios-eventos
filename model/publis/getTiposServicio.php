<?php
    include('../db.php');
    $sql = "SELECT * FROM tiposervicios";
    $servicios = $db->query($sql);
    if ($db->error=="")
        foreach ($servicios as $servicio):
            echo $servicio['id_tiposervicios'].','.$servicio['nombre'].';';
        endforeach;
?>