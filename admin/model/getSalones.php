<?php
    include './db.php';
    $email = $_POST['email'];
    $salones = getSalonesByEmail($email);
    while($salon = $salones->fetch_object())
        echo $salon->id.','.$salon->nombre.';';
?>