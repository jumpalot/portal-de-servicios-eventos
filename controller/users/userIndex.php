<?php 
    if ($loggedIn):
        echo '<script src="js/users.js"></script>';
        include 'view/users/navuser.php';
        include 'controller/users/modals.php';
    else:
        include 'view/users/navanonym.html';
    endif;
?>