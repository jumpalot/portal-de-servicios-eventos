<div class="card mb-3" style="max-width: 700px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="https://static.vecteezy.com/system/resources/previews/000/550/731/non_2x/user-icon-vector.jpg" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-center"><i class="fas fa-user-tie"></i>&nbsp;<?=$nombre?></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-mobile icon"></i><?=$telefono?></li>
                    <li class="list-group-item"><center><i class="fas fa-envelope icon"></center></i><?=$correo?></li>
                    <?php if ($ig): ?><li class="list-group-item"><i class="fab fa-instagram icon"></i><?=$ig?></li><?php endif; ?>
                    <?php if ($tw): ?><li class="list-group-item"><i class="fab fa-twitter-square icon"></i><?=$tw?></li><?php endif; ?>
                    <?php if ($fb): ?><li class="list-group-item"><i class="fab fa-facebook icon"></i><?=$fb?></li><?php endif; ?>
                    <?php if ($web): ?><li class="list-group-item"> <i class="fas fa-sitemap icon"></i><?=$web?></li><?php endif; ?>

                </ul>

            </div>
        </div>
    </div>
</div>