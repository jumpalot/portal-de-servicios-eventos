<?php
    $tps = getServiciosXtipo(@$_GET['subtipo']);
?>
<div class="productos br input-contenedor-basic">
    <div class="cont2 pd10">
        <p class="cuerpo2">
            <i class="fas fa-map-marker-alt"></i>
            <?=$zona?>
        </p>
        <br>
        <h5 id="titulo"><?=$titulo?></h5>
        <p class="cuerpo1 lnh">
            <?=$desc?>
        </p>
        <input type="submit" value="COTIZAR" class="bbrr pd10 boton">
        <input type="submit" value="&#10009;" class="bbrrr pd10 boton">
    </div>
    <div class="cont1 pd10">
        <img src="<?=$img?>" width="200" height="200">
    </div>
</div> 