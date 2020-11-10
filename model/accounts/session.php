<?php
    session_start();
    if(@$_GET['auth']){
        $_SESSION['loggedIn'] = true;
        $loggedIn = true;
        $_SESSION['usrId'] = $_GET['auth'];
    } else {
        $loggedIn = @$_SESSION['loggedIn'];
    }
?>