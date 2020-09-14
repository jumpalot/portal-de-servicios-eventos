<?php
    #traer encabezado
    require('view/common/header.html');

    #traer barra de navegación
    include('view/common/navbar.html');

    #home o home de empresa
    if($_GET*['section']=='userHome') 
        include('controller/users/userIndex.php');
    else 
        include('controller/public/publicIndex.php');

    #traer pie de página
    require('view/common/footer.html');
?>