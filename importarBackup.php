<?php
    include './model/db.php';
    $backup = file_get_contents('./backups/id14864471_portal.sql');
    echo $db->query($backup).PHP_EOL;
    echo $db->error.PHP_EOL;
    echo $db->affected_rows.PHP_EOL;
?>