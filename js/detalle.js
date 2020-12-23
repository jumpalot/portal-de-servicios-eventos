$(document).ready(() => {
    actualizarFlechas();
    $('#wrapper-detalle .carousel').on('slid.bs.carousel', () => actualizarFlechas() );
});
function actualizarFlechas(){
    let sectActual  = $('.active .posicion').val();
    let cantImgs    = $('.carousel-item img').length;
    let fizq        = $('.carousel-control-prev');
    let fder        = $('.carousel-control-next');
    if(cantImgs==0){
        fizq.hide()
        fder.hide()
    } else {
        if (sectActual==1)              fizq.hide()
        else                            fizq.show()
        if (cantImgs-sectActual*4>0)    fder.show()
        else                            fder.hide()
    }
}
function sendPresupuesto() {
    $('#wp-con h6.verde').hide()
    $('#wp-con h6.rojo').hide()
    $('#wp-con [type=submit]').attr("disabled", true);
    $.post('./model/contacto/sendPresupuesto.php', $('#wp-con').serialize(), res => {
        $('#wp-con')[0].reset()
        $('#wp-con [type=submit]').attr("disabled", false);
        if(res=='') $('#wp-con h6.verde').show()
        else {
            $('#wp-con h6.rojo').show()
            console.log(res);
        }
    });
    return false;
}