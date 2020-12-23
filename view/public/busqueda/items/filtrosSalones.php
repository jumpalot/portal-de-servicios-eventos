Filtros:
  <div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Ubicacion
   <?php 
     $tpszona=getZonas();
   ?>
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
      <?php while($tpzona = $tpszona->fetch_object()):?>
       <div class="checkbox">
        <li><label><input type="checkbox" value=<?=$tpzona->id?>><?=$tpzona->zona?></label></li>
       </div>
      <?php endwhile; ?>
   </ul>
  </div>

  <div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Salones
   <?php 
     $tpsSalones=getTiposalones();
   ?>
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
      <?php while($tpsalones = $tpsSalones->fetch_object()):?>
       <div class="checkbox">
        <li><label><input type="checkbox" value=<?=$tpsalones->id?>><?=$tpsalones->nombre?></label></li>
       </div>
      <?php endwhile; ?>
   </ul>
  </div>

  <div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Capacidad
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
       <div class="checkbox">
         <label><input type="checkbox" value="DCapacidad">Hasta 50 invitados</label>
         <label><input type="checkbox" value="DCapacidad">De 51 a 100</label>
         <label><input type="checkbox" value="DCapacidad">De 100 a 200</label>
         <label><input type="checkbox" value="DCapacidad">Mas de 200</label>
       </div>
   </ul>
  </div>