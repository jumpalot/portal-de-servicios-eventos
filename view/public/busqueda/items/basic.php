<?php
    $tps = MegagetServicios(@$_GET['subtipo']);
    if(@$_GET['tipo']=="servicios"){
        $tps = MegagetServicios(@$_GET['subtipo']);
    }else if(@$_GET['tipo']=="salon"){
        $tps = MegagetSalones(@$_GET['subtipo']);
    }
    while($tp = $tps->fetch_object()): 
?>
<div class="media">
 <div class="productos br input-contenedor-basic">
    <div class="cont2 pd10">
        <p class="cuerpo2">
            <i class="fas fa-map-marker-alt"></i>
            <?=$tp->zona?>
        </p>
        <br>
        <h5 id="titulo"><?=$tp->nombre?></h5>
        <p class="cuerpo1 lnh">
            <?=$tp->descripcion?>
        </p>
        <input type="submit" value="COTIZAR" class="bbrr pd10 boton">
        <input type="submit" value="&#10009;" class="bbrrr pd10 boton">
    </div>
    <div class="cont1 pd10">
        <img src="./img/<?=$tipo?>/<?=$foto?>" width="200" height="200">
    </div>
 </div> 
 <?php endwhile; ?>
 <div class="media-right">
  Filtros:
  <div class="dropdown">
   <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   Zona
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
 </div>
</div>
