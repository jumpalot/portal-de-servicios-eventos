<?php
    include('../db.php');
    include('../validations.php');
    include('../email.php');

    $email = $_POST['email'];

    if (validemail($email)){
        if (existsEmail($email)){
            echo enviarCodigo($email);
        } else echo 'noemail';
    } else echo 'invemail';
    
?>