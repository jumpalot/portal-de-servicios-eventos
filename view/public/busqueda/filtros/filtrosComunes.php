<select id="filtroZona" class="selectpicker form-control zonas" data-style="input-contenedor" data-width="100%" name="zonas[]" data-live-search="true" title="Ubicación" multiple>
   <?php while($tpzona = $tpszona->fetch_object()):?>
      <option value="<?=$tpzona->id?>"<?=($zonaActual==$tpzona->id)?"selected":""?>><?=$tpzona->zona?></option>
   <?php endwhile; ?>
</select>
<!-- <select id="filtroOferta" class="selectpicker form-control" data-style="input-contenedor" data-width="100%" name="descuentos[]" data-live-search="false" title="Descuentos" multiple>
  <option value="0;51">De 5 a 10%</option>
  <option value="50;101">De 15 a 20%</option>
  <option value="100;201">25% o mas</option>
</select> -->