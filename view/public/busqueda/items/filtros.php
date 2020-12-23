Filtros:
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  Zona
  <?php 
     $tps=getZonas();
  ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
      <?php while($tp = $tps->fetch_object()):?>
    <li><a class="checkbox" href="#"><?=$tp->zona?></a></li>
      <?php endwhile; ?>
  </ul>
</div>