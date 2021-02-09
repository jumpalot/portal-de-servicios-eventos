<div class="productos br input-contenedor-basic" id="<?=$tp->id?>-<?=$tipo?>" onclick="iraDetalle(this.id)">
     <div class="cont2">
        <p class="cuerpo2">
            <i class="fas fa-map-marker-alt"></i>
            <?=$tp->zona?>
        </p>
        <h5 id="titulo"><?=$tp->nombre?></h5>
        <p class="cuerpo1 lnh">
            <?=strip_tags($tp->descripcion)?>
        </p>
     </div>
    <div class="cont1 pd10 text-center">
        <img src="./img/<?=$tp->idUsu?>/<?=$tipo?>/<?=$tp->foto?>">
    </div>
</div>