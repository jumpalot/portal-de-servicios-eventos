<?php
    if(
        @$_POST['email']=="portalservicioseventos@outlook.com" &&
        @$_POST['pass']=="12345678"
    ){
        session_start();
        $_SESSION['adminlogin'] = true;
    } else {
        echo 'invalid';
    }
?>