<?php
    #desambiguacion
    switch(@$_GET['section']){
        case 'idea':
            include('./controller/public/ideas_detalle.php');
        break;
        case 'preview':
            header('Location: ./?section=detalle&tipo='.$_SESSION['tipo'].'&idPub='.$_SESSION['idPub']);
        break;
        case 'privacidad':
            include('./view/public/legales/politica_privacidad.html');
        break;
        case 'terminos':
            include('./view/public/legales/terminos_condiciones.html');
        break;
        case 'promos':
            include('./view/public/minisearch.html');
            include('./view/public/Promociones.html');
        break;
        case 'salones':
            include('./view/public/minisearch.html');
            include('./view/public/Salones.html');
        break;
        case 'servicios':
            include('./view/public/minisearch.html');
            include('./view/public/Servicios.html');
        break;
        case 'detalle':
            include("./controller/public/".$_GET['tipo']."_detalle.php");
        break;
        case 'contacto':
            include('./view/public/Contacto.html');
        break;
        case 'search':
            include('./view/public/minisearch.html');
            include('./view/public/busqueda/Busqueda.html');
        break;
        default:
            include('./controller/public/home.php');
    }
?>