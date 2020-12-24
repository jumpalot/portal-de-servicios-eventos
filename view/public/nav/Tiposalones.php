<?php $tpsal = getTiposalones(); ?>
<li class="nav-item dropdown" id="ddsalon">
  <a class="nav-link dropdown-toggle" onclick="window.location='?section=categorias&tipo=salon'" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
    Salones
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <?php while($tp = $tpsal->fetch_object()): ?>
      <a class="dropdown-item" href="?section=search&tipo=salon&subtipo=<?=$tp->id?>">
        <?=$tp->nombre?>
      </a>
    <?php endwhile; ?>
  </div>
</li>