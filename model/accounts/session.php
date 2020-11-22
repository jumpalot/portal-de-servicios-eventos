<?php
    session_start();
    $loggedIn = @$_SESSION['loggedIn'];
    if (isset($_GET['logout'])){
        session_unset();
        session_destroy();
        header('Location: ./');
    }
?>