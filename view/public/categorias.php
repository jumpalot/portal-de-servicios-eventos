<?php
    $tps = getTiposervicios();
?>
<a class="nav-link" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">Servicios </a>
<div class="dropdown">
<button class="dropbtn">categorias
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <div class="row">
          <div class="column">
           <?php while($tp = $tps->fetch_object()): ?>
            <a href="?section=search&tipo=<?=$tp->nombre?>"><?=$tp->nombre?></a>
           <?php endwhile; ?>
          </div>
        </div>
    </div>
</div>