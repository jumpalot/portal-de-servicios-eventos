$(document).ready( () => updateSelects() );
const addOption = (options, msg) => {
    if (msg!=""){
        var option = document.createElement("option");
        [option.value, option.text] = msg.split(",");
        options.add(option);
    }
}
const addOptions = (csvOptions, id) => {
    var options = $(id)[0].options
    csvOptions.split(";").forEach(opt => addOption(options, opt));
    $(id).selectpicker('refresh');
}
const showRes = res => {
    $('#respuesta').text(res);
    $('.alert').alert();
    $('.alert').addClass('show');
}
function updateSelects(){
    rmZonasLoad();
    rmTipoSalonLoad();
    rmTipoServiciosLoad();
}
function logIn(){
    $.post(
        './model/login.php',
        $('form#login').serialize(),
        msg => {
            if(msg=='invalid') $('#loginfail')[0].style.display = 'block';
        }
    ); 
    return false;
}
function setZonas(){
    $.post(
        './model/setZonas.php',
        $('form#setZonas').serialize(),
        res => showRes(res)
    );
}
function setTipoServicios(){
    $.post(
        './model/setTipoServicios.php',
        $('form#setTipoServicios').serialize(),
        res => showRes(res)
    );
}
function setTipoSalon(){
    $.post(
        './model/setTipoSalon.php',
        $('form#setTipoSalon').serialize(),
        res => showRes(res)
    );
}
function rmZonas(){

}
function rmZonasLoad(){
    $('#rmZonas select').empty();
    $.post("../model/publis/getZonas.php",          zonas => addOptions(zonas, "#rmZonas select"));
}
function rmTipoServicios(){
    
}
function rmTipoServiciosLoad(){
    $('#rmTipoServicios select').empty();
    $.post("../model/publis/getTiposServicio.php",  tiposS => addOptions(tiposS, "#rmTipoServicios select"));
}
function rmTipoSalon(){

}
function rmTipoSalonLoad(){
    $('#rmTipoSalon select').empty();
    $.post("../model/publis/getTiposSalon.php",     tiposS => addOptions(tiposS, "#rmTipoSalon select"));
}
function rmUsuarios(){

}
function rmServicios(){

}
function rmServiciosLoad(){
    if($('#rmServicios [type=email]')[0].checkValidity()){
        $.post(
            "./model/getServicios.php",
            $('form#rmServicios').serialize(),
            servicios => {
                $('#rmServicios select').empty()
                addOptions(servicios, "#rmServicios select")
            }
        );
    }
}
function rmSalon(){

}
function rmSalonLoad(){
    if($('#rmSalon [type=email]')[0].checkValidity()){
        $.post(
            "./model/getSalones.php",
            $('form#rmSalon').serialize(),
            servicios => {
                $('#rmSalon select').empty()
                addOptions(servicios, "#rmSalon select")
            }
        );
    }
}