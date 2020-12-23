<?php
    $tps = getTiposalones();
?>
<li class="nav-item dropdown" id="ddsalon">
        <a class="nav-link dropdown-toggle" onclick="window.location='?section=salones'" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Salones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php while($tp = $tps->fetch_object()): ?>
            <a class="dropdown-item" href="?section=search&tipo=salon&subtipo=<?=$tp->id?>"><?=$tp->nombre?></a>
           <?php endwhile; ?>
        </div>
      </li>