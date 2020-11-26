<?php
    include('../db.php');
    $sql = "SELECT * FROM lservicios";
    $servicios = $db->query($sql);
    if ($db->error=="")
        foreach ($servicios as $servicio):
            echo $servicio[0].','.$servicio[1].';';
        endforeach;
?>