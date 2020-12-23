<?php
    $tps = MegagetServicios(@$_GET['subtipo']);
    while($tp = $tps->fetch_object()): 
?>
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
        <img src="<?=$tp->foto?>" width="200" height="200">
    </div>
</div> 
<?php endwhile; ?>