<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"
      ><img src="img/logo.png" width="350" height="60"
    /></a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarResponsive"
      aria-controls="navbarResponsive"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Categorias </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Salones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Imagen personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item">
          <?php if ($loggedIn): ?>
            <div class="btn-group">
                <button type="button" class="btn btn-light" ><?=$usuario->nombre?></button>
                <button type="button" class="btn btn-light dropdown-toggle"
                  data-toggle="dropdown">
                </button>
                  <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="#">Perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Mis Publicaciones</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Nueva publicacion</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar Sesion</a>
          </div>
            </div>
          <?php else: ?>
            <a class="nav-links" href="./login">
              <svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-box-arrow-in-right"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
              </svg>
              Empresas
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
