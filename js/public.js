$(document).ready(() => {
    cargarZonas();
    iniciarHovers();
});

const addOption = (options, msg) => {
    if (msg!=""){
        var option = document.createElement("option");
        [option.value, option.text] = msg.split(",");
        options.add(option);
    }
}
const addOptions = (csvOptions, id) => {
    var options = $(id)[0].options;
    csvOptions.split(";").forEach(opt => addOption(options, opt));
    $(id).selectpicker('refresh');
}
const isEmpty = id => $(id)[0].options.length<2;

function cargarZonas(){
    if ($('#minisearch').length){
        if (isEmpty("#minisearch select.zonas")){
            $.post("./model/publis/getZonas.php", zonas => addOptions(zonas, "#minisearch select.zonas"));
        }
    }
}
function iniciarHovers(){
    $('#ddservicios').hover(
        ()=>{
            $('#ddservicios').addClass('show')
            $('#ddservicios .dropdown-menu').addClass('show')
        },
        ()=>{
            $('#ddservicios').removeClass('show')
            $('#ddservicios .dropdown-menu').removeClass('show')
        }
    );
    $('#ddsalon').hover(
        ()=>{
            $('#ddsalon').addClass('show')
            $('#ddsalon .dropdown-menu').addClass('show')
        },
        ()=>{
            $('#ddsalon').removeClass('show')
            $('#ddsalon .dropdown-menu').removeClass('show')
        }
    );
}