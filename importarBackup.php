<?php
    include './model/db.php';
    $backup = file_get_contents('./backups/id14864471_portal.sql');
    $querys = explode(';', $backup);
    foreach ($querys as $query){
        echo $db->query($query).PHP_EOL;
        echo $db->error.PHP_EOL;
        echo $db->affected_rows.PHP_EOL;
    }
?>