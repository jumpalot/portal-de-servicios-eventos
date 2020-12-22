<div class="infoContacto" id="wrapper-iusu">
    <h5 id="wp-titu">Contacto Directo</h5>
    <h6 id="wp-nomb"><?=$nombreUsu?></h6>
    <a id="wp-celu" href="https://wa.me/<?=$telefono?>" target="_blank">
        <i class="fab fa-whatsapp"></i>
        <h6>&nbsp; &nbsp;<?=$telefono?></h6>
    </a>
    <a id="wp-mail" href="mailto:<?=$email?>">
        <i class="fas fa-envelope"></i>
        <h6>&nbsp; &nbsp;<?=$email?></h6>
    </a>
    <div id="wp-reds">
        <?php if($ig): ?> <a href="https://www.instagram.com/<?=$ig?>" target="_blank"><i class="fab fa-instagram"></i></a> <?php endif; ?>
        <?php if($tw): ?> <a href="https://twitter.com/<?=$ig?>" target="_blank"><i class="fab fa-twitter"></i></a> <?php endif; ?>
        <?php if($fb): ?> <a href="https://www.facebook.com/<?=$fb?>" target="_blank"><i class="fab fa-facebook"></i></a> <?php endif; ?>
        <?php if($web): ?> <a href="<?=$web?>" target="_blank"><i class="fas fa-globe"></i></a> <?php endif; ?>
    </div>
</div>
</div>
</div>