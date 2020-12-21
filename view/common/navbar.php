<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="primaryNavbar">
  <div class="container">
    <a class="navbar-brand" href="http://portalgardey.escuelarobertoarlt.com.ar/"
      ><img src="./img/logo.png" width="350" height="60"
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
          <?php include './view/public/Tiposervicios.php' ?>
        </li>
        <li class="nav-item">
          <?php include'./view/public/Tiposalones.php' ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Imagen personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?section=contacto">Contacto</a>
        </li>
        <li class="nav-item">
          <?php include './controller/users/userIndex.php' ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
