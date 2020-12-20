<?php
    session_start();
    include './view/header.html';
    if (@$_SESSION['adminlogin']){
        include './controller/body.php';
    } else {
        include './view/login.html';
    }
    include './view/footer.html';
?>