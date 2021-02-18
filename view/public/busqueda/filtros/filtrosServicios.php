<select id="filtroSubtipo" class="selectpicker form-control subtipo" data-style="input-contenedor" data-width="100%" name="subtipos[]" data-live-search="true" title="Tipos de servicio" multiple>
   <?php while($tpservicios = $tpsServicios->fetch_object()):?>
      <option value="<?=$tpservicios->id?>" <?=($subTipo==$tpservicios->id)?"selected":""?>><?=$tpservicios->nombre?></option>
   <?php endwhile; ?>
</select>