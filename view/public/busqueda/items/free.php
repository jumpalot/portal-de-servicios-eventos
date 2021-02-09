<div class="productos br input-contenedor-basic free" id="<?=$tp->id?>-<?=$tipo?>" onclick="iraDetalle(this.id)">
     <div class="cont2">
        &nbsp;&nbsp;&nbsp;
        <h5 class="inline" id="titulo"><?=$tp->nombre?></h5>
        <p class="cuerpo2 inline">
            &nbsp;&nbsp;
            <i class="fas fa-map-marker-alt"></i>
            &nbsp;
            <?=$tp->zona?>
            &nbsp;
        </p>
        <p class="cuerpo1 lnh">
            <?=$tp->descripcion?>
        </p>
        <input type="button" value="COTIZAR"  class="bbrr pd10 boton">
     </div>
</div>