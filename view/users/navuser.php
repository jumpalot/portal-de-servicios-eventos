<div class="btn-group">
    <button type="button" class="btn btn-light" ><?=$usuario->nombre?></button>
    <button type="button" class="btn btn-light dropdown-toggle"
        data-toggle="dropdown">
    </button>
    <div class="dropdown-menu" role="menu">
        <a class="dropdown-item" data-toggle="modal" data-target="#profileModal" role="button">Perfil</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" data-toggle="modal" data-target="#myPubsModal" role="button">Mis Publicaciones</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" data-toggle="modal" data-target="#newPostModal" role="button">Nueva publicacion</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="./?logout=1">Cerrar Sesion</a>
    </div>
</div>