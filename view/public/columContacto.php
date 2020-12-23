<form id="wp-con" onsubmit="return sendPresupuesto()">
    <h3>SOLICITAR PRESUPUESTO</h3>
    <h5>Datos del evento</h5>
    <div class="input-group">
        <div class="input-group-prepend"><i class="fas fa-calendar-alt"></i></div>
        <input class="form-control" placeholder="Fecha del Evento" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="fecha" required />
    </div>
    <div class="input-group">
        <div class="input-group-prepend"><i class="fas fa-users"></i></div>
        <input class="form-control" placeholder="Cantidad de invitados" type="text" name="cantidad" required />
    </div>
    <h5>Datos del contacto</h5>
    <div class="input-group">
        <div class="input-group-prepend"><i class="fas fa-user"></i></div>
        <input class="form-control" placeholder="Nombre" type="text" name="nombre" required />
    </div>
    <div class="input-group">
        <div class="input-group-prepend"><i class="fas fa-user"></i></div>
        <input class="form-control" placeholder="Apellido" type="text" name="apellido" required />
    </div>
    <div class="input-group">
        <div class="input-group-prepend"><i class="fas fa-phone-alt"></i></i></div>
        <input class="form-control" placeholder="Telefono" type="tel" name="telefono" required />
    </div>
    <div class="input-group">
        <div class="input-group-prepend"><i class="fas fa-envelope"></i></div>
        <input class="form-control" placeholder="Direccion de correo" type="email" name="email" required />
    </div>
    <textarea class="form-control border-0" name="comentarios" cols="30" rows="7" placeholder="Comentarios o sugerencias" required></textarea>
    <input type="hidden" name="titulo" value="<?=$titulo?>">
    <input type="hidden" name="destinatario" value="<?=$email?>">
    <input type="submit" class="bblr border-0">
    <h6 class="hidden verde">Enviado</h6>
    <h6 class="hidden rojo">Error al enviar</h6>
</form>