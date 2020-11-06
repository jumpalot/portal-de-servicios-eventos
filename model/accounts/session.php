<?php
    session_start();
    if(@$_GET['auth']==true){
        $_SESSION['loggedIn'] = true;
        $loggedIn = true;
        $profileimg = @$_POST['profpic'];
        $profilenom = @$_POST['nom'];
    } else if(@$_GET['auth']=='reg'){
        
    } else {
        $loggedIn = @$_SESSION['loggedIn'];
    }
?>