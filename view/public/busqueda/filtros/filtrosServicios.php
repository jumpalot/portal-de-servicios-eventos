  <div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Servicios
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
      <?php while($tpservicios = $tpsServicios->fetch_object()):?>
       <div class="checkbox">
        <li><label><input type="checkbox" value=<?=$tpservicios->id?>><?=$tpservicios->nombre?></label></li>
       </div>
      <?php endwhile; ?>
   </ul>
  </div>