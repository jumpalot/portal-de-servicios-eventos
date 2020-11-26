<?php 
    if ($loggedIn):
        echo '<script src="js/users.js"></script>';
        include 'view/users/navuser.html';
        include 'controller/users/modals.php';
    else:
        include 'view/users/navanonym.html';
    endif;
?>