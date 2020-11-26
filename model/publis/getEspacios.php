<?php
    include('../db.php');
    $sql = "SELECT * FROM espacios";
    $espacios = $db->query($sql);
    if ($db->error!="")
        foreach ($espacios as $espacio):
            echo $espacio[0].','.$espacio[1].';';
        endforeach;
?>