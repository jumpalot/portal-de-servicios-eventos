<?php
    if($loggedIn){
        switch(@$_GET['subSection']){
            case 'new':  
                include('view/users/newPost.html');
                break;
            case 'settings':
                break;
            case 'vip':
                break;
            default:
                include('view/users/userHome.html');
        }
        
    } else header('Location: ./login/');
?>