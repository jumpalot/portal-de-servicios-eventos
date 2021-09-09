<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="primaryNavbar">
  <div class="container">
    <a class="navbar-brand" href="https://proyectopresentacion.000webhostapp.com/"
      ><img src="./img/logo.png" height="60"
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
          <?php include './view/public/nav/Tiposervicios.php' ?>
        </li>
        <li class="nav-item">
          <?php include './view/public/nav/Tiposalones.php' ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?section=promos">Promociones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#contactoModal" role="button">Contacto</a>
        </li>
        <li class="nav-item">
          <?php include './controller/users/userIndex.php' ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
