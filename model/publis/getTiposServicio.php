<?php
    include('../db.php');
    $sql = "SELECT * FROM tiposervicio";
    $servicios = $db->query($sql);
    if ($db->error=="")
        foreach ($servicios as $servicio):
            echo $servicio['id_tiposervicio'].','.$servicio['nombre'].';';
        endforeach;
?>