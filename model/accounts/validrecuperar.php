<?php
    include('../db.php');
    include('../validations.php');

    $email = @$_POST['email'];
    $codigo = @$_POST['code'];
    $pass = @$_POST['pass'];

    if ($email){
        if (verificarCodigo($codigo, $email)=='true'){
            if(!updatePass($email, md5($pass))) echo 'errorInDb';
        } else echo 'noverif';
    } else echo 'unsetEmail';

?>