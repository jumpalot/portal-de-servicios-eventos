<div class="input-group mb-3">
  <div class="input-group-prepend border border-light h-50">
    <span class="input-group-text w-50">
        <input type="radio" name="fotoP" class="radioFotoP" value="<?=$idFoto?>" <?=$checked?>>
    </span>
  </div>
  <img src="<?=$foto?>" class="border border-light h-50">
  <input type="text" class="form-control border border-light h-50" value="<?=$nombre?>" readonly>
  <div class="input-group-append border border-light h-50">
    <span class="input-group-text"><i class="fas fa-trash"></i></span>
  </div>
</div>