<div class="input-contenedor">
    <input type="text" placeholder="Nombre de la Empresa" name="name" value="<?=$nombre?>" pattern="[A-Za-z0-9 ]{3,20}" required>
</div>           
<div class="input-contenedor">
    <input type="tel" placeholder="Numero telefonico" name="tel" value="<?=$telefono?>" required>   
</div>
<div class="input-contenedor">
    <input type="text" placeholder="Usuario de facebook (opcional)" value="<?=$fb?>" name="fb" pattern="([A-Za-z0-9_]{0,20})">  
</div>
<div class="input-contenedor">
    <input type="text" placeholder="Usuario de instagram (opcional)" name="ig" value="<?=$ig?>" pattern="@([A-Za-z0-9_]{0,16})"> 
</div>
<div class="input-contenedor">
    <input type="text" placeholder="Usuario de twitter (opcional)" name="tw" value="<?=$tw?>" pattern="@([A-Za-z0-9_]{0,16})">  
</div>
<div class="input-contenedor">
    <input type="text" placeholder="pagina web (opcional)" name="web" value="<?=$web?>" pattern="\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i"> 
</div>  