<?php
    $db = new mysqli('localhost','u812890733_Jpgardey','G12345678y','u812890733_Portalgardey');
    $sql = "SELECT count(*) FROM promociones";
    echo $db->query($sql)->fetch_array()[0];
?>