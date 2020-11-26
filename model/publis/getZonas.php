<?php
    include('../db.php');
    $sql = "SELECT * FROM zonas";
    $zonas = $db->query($sql);
    if ($db->error=="")
        foreach ($zonas as $zona):
            echo $zona['id_zona'].','.$zona['zona'].';';
        endforeach;
        