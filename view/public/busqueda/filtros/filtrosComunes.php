<select class="selectpicker form-control zonas" data-style="input-contenedor" data-width="100%" name="zonas[]" data-live-search="true" title="Ubicación" multiple>
   <?php while($tpzona = $tpszona->fetch_object()):?>
      <option value="<?=$tpzona->id?>"><?=$tpzona->zona?></option>
   <?php endwhile; ?>
</select>