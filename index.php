<?php
    #importar funciones
    require('./model/all.php');

    #traer encabezado
    require('./view/common/header.html');

    #traer barra de navegación
    include('./view/common/navbar.php');

    #home
    include('./controller/public/publicIndex.php');

    #traer pie de página
    require('./view/common/footer.html');
?>