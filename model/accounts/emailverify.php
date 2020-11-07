<?php
    include('../db.php');
    include('../email.php');
    if (@$_POST['code']){
        echo verificarCodigo($_POST['code'], $_POST['email']);
    } else {
        enviarCodigo($_POST['email']);
    }
    
?>