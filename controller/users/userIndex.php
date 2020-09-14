<?php
    if($_SESSION*['loggedIn']) include('view/users/userHome.html');
    else include('view/users/logIn.html');
?>