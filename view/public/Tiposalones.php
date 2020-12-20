<?php
    $tps = getTiposalones();
?>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Salones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php while($tp = $tps->fetch_object()): ?>
            <a class="dropdown-item" href="?section=salones&tipo=<?=$tp->nombre?>"><?=$tp->nombre?></a>
           <?php endwhile; ?>
        </div>
      </li>