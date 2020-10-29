<?php
    #desambiguacion
    switch(@$_GET['section']){
        case 'idea':
            include('controller/public/ideas_detalle.php');
        default:
            include('controller/public/home.php');
    }
?>