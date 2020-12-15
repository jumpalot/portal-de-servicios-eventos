<div class="productos br  input-contenedor-pro" id="<?=$tipo?>-<?=$pubId?>" onclick="editarPub(this.id)">
        <div class="cont2 pd10">
            <p class="cuerpo2">
                <i class="fas fa-map-marker-alt"></i>&nbsp;<?=$zona?>
                <br>
            </p>
            <h6 id="titulo">☆ <?=$titulo?></h6>
            <p class="cuerpo1 lnh">
                <?=$desc?>
            </p>
            <?php if ($desc>0):?>
                <label class="btlr pd10 "><?=$desc?>% OFF</label>
            <?php endif; ?>
        </div>
        <div class="cont1 pd10">
            <img src="<?=$img?>" width="100" height="100">
        </div>
</div>