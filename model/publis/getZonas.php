<?php
    include('../db.php');
    $sql = "SELECT * FROM zonas";
    $zonas = $db->query($sql);
    if ($db->error=="")
        foreach ($zonas as $zona):
            echo $zona[0].','.$zona[1].';';
        endforeach;
        