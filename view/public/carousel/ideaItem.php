<div class="carousel-item <?=$active?>">
    <input type="hidden" class="posicion" value="<?=$contSecciones?>">
    <div class="row">
        <?php foreach ($img as $item): ?>
            <div class="col-sm">
                <img src="./img/<?=$idUsu?>/<?=$tipo?>/<?=$item?>" class="block" height="140" width="140">
            </div>
        <?php endforeach; ?>
    </div>
</div>
