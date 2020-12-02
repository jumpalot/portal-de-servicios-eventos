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
          <a class="nav-link" href="./?section=salones">Salones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Imagen personal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item">
          <?php include 'controller/users/userIndex.php' ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
