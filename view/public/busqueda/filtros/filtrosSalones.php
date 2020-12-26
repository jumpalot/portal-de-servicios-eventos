<select class="selectpicker form-control subtipo" data-style="input-contenedor" data-width="100%" name="subtipos[]" data-live-search="true" title="Tipos de salon" multiple>
   <?php while($tpsalones = $tpsSalones->fetch_object()): ?>
      <option value="<?=$tpsalones->id?>"><?=$tpsalones->nombre?></option>
   <?php endwhile; ?>
</select>

<select class="selectpicker form-control subtipo" data-style="input-contenedor" data-width="100%" name="cantidades[]" data-live-search="false" title="Capacidad de personas" multiple>
  <option value="0;51">Hasta 50 invitados</option>
  <option value="50;101">De 51 a 100</option>
  <option value="100;201">De 101 a 200</option>
  <option value="200;2000000000">Mas de 200</option>
</select>