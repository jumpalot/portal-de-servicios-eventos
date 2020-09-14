<?php
    #desambiguacion
    switch($_GET*['section']){
        default:
            include('controller/public/home.php');
    }
?>