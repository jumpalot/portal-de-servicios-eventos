<?php
    #desambiguacion
    switch(@$_GET['section']){
        case 'idea':
            include('controller/public/ideas_detalle.php');
        break;
        case 'privacidad':
            include('controller/public/legales/politica_privacidad.html');
        break;
        case 'terminos':
            include('controller/public/legales/terminos_condiciones');
        break;
        default:
            include('controller/public/home.php');
    }
?>