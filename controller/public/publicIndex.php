<?php

    #desambiguacion
    switch(@$_GET['section']){
        case 'idea':
            include('./controller/public/ideas_detalle.php');
        break;
        case 'preview':
            echo '<script>
                    window.location="./?section=detalle&tipo='.$_SESSION['tipo'].'&idPub='.$_SESSION['idPub'].'";
                  </script>';
        break;
        case 'privacidad':
            include('./view/public/legales/politica_privacidad.html');
        break;
        case 'terminos':
            include('./view/public/legales/terminos_condiciones.html');
        break;
        case 'promos':
            echo '<script src="./js/promos.js"></script>';
            include('./view/public/nav/minisearch.html');
            include('./view/public/promociones/promociones.html');
        break;
        case 'categorias':
            include('./view/public/nav/minisearch.html');
            include('./controller/public/categorias.php');
        break;
        case 'detalle':
            echo '<script src="./js/detalle.js"></script>';
            include('./view/public/nav/minisearch.html');
            include("./controller/public/".$_GET['tipo']."_detalle.php");
        break;
        case 'search':
            echo '<script>var tipo="'.@$_GET['tipo'].'"; var subtipo="'.@$_GET['subtipo'].'";</script>';
            echo '<script src="./js/busqueda.js"></script>';
            include('./view/public/nav/minisearch.html');
            include('./view/public/busqueda/Busqueda.html');
        break;
        default:
            include('./controller/public/home.php');
    }
    #generales
    include './view/public/modals/result.html';
    include './view/public/modals/contacto.html';
?>