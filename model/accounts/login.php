<?php
    include('../db.php');
    include('../validations.php');
    include('../email.php');
    include('./account.php');
    if( isset($_POST['email']) & isset($_POST['pass']) ){
        echo login($_POST['email'], $_POST['pass']);
    } else echo 'noverif';
?>