<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">
        <input type="radio" name="fotoP" class="radioFotoP" value="<?=$idFoto?>" <?=$checked?>>
    </span>
  </div>
  <img src="<?=$foto?>">
  <input type="text" class="form-control" value="<?=$nombre?>" readonly>
  <div class="input-group-append">
    <span class="input-group-text"><i class="fas fa-trash"></i></span>
  </div>
</div>