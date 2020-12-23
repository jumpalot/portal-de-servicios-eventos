<div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Ubicacion
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
      <?php while($tpzona = $tpszona->fetch_object()):?>
       <div class="checkbox">
        <li><label><input type="checkbox" value=<?=$tpzona->id?>><?=$tpzona->zona?></label></li>
       </div>
      <?php endwhile; ?>
   </ul>
  </div>