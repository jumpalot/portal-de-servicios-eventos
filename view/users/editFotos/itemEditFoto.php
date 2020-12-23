<div class="input-group mb-3">
  <div class="input-group-prepend h-50">
    <span class="input-group-text border-0 h-50 w-50">
        <input type="radio" name="fotoP" class="radioFotoP" value="<?=$idFoto?>" <?=$checked?>>
    </span>
  </div>
  <img src="<?=$foto?>" class="border-0 h-50">
  <input type="text" class="form-control border-0 h-50" value="<?=$nombre?>" readonly>
  <div class="input-group-append h-50">
    <button class="input-group-text border-0 h-50" id="<?=$idFoto?>" onclick="addToTrash(this.id)"><i class="fas fa-trash"></i></button>
  </div>
</div>