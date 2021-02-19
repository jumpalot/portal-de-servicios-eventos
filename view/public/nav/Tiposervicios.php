<?php $tpser = getTiposervicios(); ?>
<li class="nav-item dropdown" id="ddservicios">
  <a class="nav-link dropdown-toggle" onclick="window.location='?section=categorias&tipo=servicios'" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
    Servicios
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <?php while($tp = $tpser->fetch_object()): ?>
      <a class="dropdown-item primera-letra" href="?section=search&tipo=servicios&subtipo=<?=$tp->id?>">
        <?=$tp->nombre?>
      </a>
    <?php endwhile; ?>
  </div>
</li>