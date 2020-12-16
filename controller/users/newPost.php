<?php
    //inicio el modal
    include('./view/users/newPost/np-header.html');

    //pido los datos que son iguales en todas las publicaciones
    include('./view/users/newPost/np-common.html');

    //pido los datos exclusivos de cada tipo de publicacion
    include('./view/users/newPost/np-servicio.html');
    include('./view/users/newPost/np-salon.html');
    include('./view/users/newPost/np-imagen.html');
    include('./view/users/newPost/np-ideas.html');
    include('./view/users/newPost/np-trabajo.html');
    include('./view/users/newPost/np-evento.html');

    //permito cargar fotos
    include('./view/users/newPost/np-dropzone.php');

    //finalizo el modal
    include('./view/users/newPost/np-footer.html');
?>