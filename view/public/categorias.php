<?php
    $tps = getTiposervicios();
?>
<a class="nav-link" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Categorias </a>
<div class="dropdown">
  <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Categorias
  </button> -->
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <?php while($tp = $tps->fetch_object()): ?>
    <li><a class="dropdown-item" href="?section=search&tipo=<?=$tp->nombre?>"><?=$tp->nombre?></a></li>
    <?php endwhile; ?>
  </ul>
</div>