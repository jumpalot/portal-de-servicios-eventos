$(document).ready(() => {

    actualizarFlechas();
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