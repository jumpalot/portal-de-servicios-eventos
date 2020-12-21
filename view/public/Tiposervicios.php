<?php
    $tps = getTiposervicios();
?>
<li class="nav-item dropdown" id="ddservicios">
        <a class="nav-link dropdown-toggle" href="?section=servicios" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php while($tp = $tps->fetch_object()): ?>
            <a class="dropdown-item" href="?section=search&tipo=servicios&subtipo=<?=$tp->id?>"><?=$tp->nombre?></a>
           <?php endwhile; ?>
        </div>
      </li>