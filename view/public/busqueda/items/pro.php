<div class="productos br  input-contenedor-pro">
     <div class="cont2 pd10">
        <p class="cuerpo2">
            <i class="fas fa-map-marker-alt"></i>
            &nbsp;<?=$tp->zona?>
        </p>
        <br>
        <h5 id="titulo">☆ <?=$tp->nombre?></h5>
        <p class="cuerpo1 lnh">
            <?=$tp->descripcion?>
        </p>
        <?php if ($tp->descuento!="0"):?>
                <label class="btlr pd10 "><?=$descu?>% OFF</label>
        <?php endif; ?>
        <input type="submit" value="COTIZAR" class="bbrr pd10 boton">
        <input type="submit" value="&#10009;" class="bbrrr pd10 boton">
     </div>
    <div class="cont1 pd10">
        <img src="./img/<?=$tp->idUsu?>/<?=@$_GET['tipo']?>/<?=$tp->foto?>" width="200" height="200">
    </div>
</div>