<?php 
    if ($loggedIn):
        echo '<script src="js/users.js"></script>';
        include './view/users/nav/navuser.php';
        include './controller/users/modals.php';
    else:
        include './view/users/nav/navanonym.html';
    endif;
?>