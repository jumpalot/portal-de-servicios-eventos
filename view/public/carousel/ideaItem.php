<div class="carousel-item <?=$active?> container">
    <div class="row">
        <?php foreach ($img as $item): ?>
            <div class="col-sm">
                <img src="<?=$item?>" class="block" height="140" width="140">
            </div>
        <?php endforeach; ?>
    </div>
</div>
