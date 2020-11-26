<?php
    include('../db.php');
    $sql = "SELECT * FROM tiposalon";
    $tsalons = $db->query($sql);
    if ($db->error!="")
        foreach ($tsalons as $tsalon):
            echo $tsalon[0].','.$tsalon[1].';';
        endforeach;
?>