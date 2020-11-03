<?php
    #desambiguacion
    switch(@$_GET['section']){
        case 'idea':
            include('controller/public/ideas_detalle.php');
        break;
        case 'privacidad':
            include('view/public/legales/politica_privacidad.html');
        break;
        case 'terminos':
            include('view/public/legales/terminos_condiciones.html');
        break;
        default:
            include('controller/public/home.php');
    }
?>