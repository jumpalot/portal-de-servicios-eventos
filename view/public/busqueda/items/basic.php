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
        <input type="button" id="<?=$tp->id?>-<?=$tipo?>" onclick="iraDetalle(this.id)" value="COTIZAR" class="bbrr pd10 boton">
     </div>
    <div class="cont1 pd10">
        <img src="./img/<?=$tp->idUsu?>/<?=$tipo?>/<?=$tp->foto?>" width="200" height="200">
    </div>
</div>