$.fn.selectpicker.Constructor.BootstrapVersion = '4';
const listaTPublis = new Array(
    "newServicio",
    "newSalon",
    "newEvento",
    "newImagenP",
    "newTrabajo",
    "newIdea"
);
const addOption = msg => {
    if (msg!=""){
        var option = document.createElement("option");
        [option.value, option.text] = msg.split(",");
        options.add(option);
    }
}
const addOptions = (csvOptions, id) => {
    var options = $(id)[0].options
    csvOptions.split(";").forEach(addOption);
    $(id)[0].selectpicker('refresh');
}
function mostrarNewPost2() {
    var tipo = document.getElementById("tipo");
    var opcion = tipo.$("#zonasSalon")[0][tipo.selectedIndex];
    for (publi of listaTPublis) {
        var pub = document.getElementById(publi);
        if (pub!=null)
            pub.style.display = "none";
    }
    document.getElementById(opcion.value).style.display = "block";
    inicializarSelects(opcion.value);
}
function newPost(){
    return false;
}
function inicializarSelects(id){
    switch (id){
        case "newServicio":
            $.post("/model/publis/getZonas.php",         zonas => addOptions(zonas, "#zonasServicio"))
            $.post("/model/publis/getTiposServicio.php", tiposS => addOptions(tiposS, "#tiposServicio"))
            break;
        case "newSalon":
            $.post("/model/publis/getZonas.php",         zonas => addOptions(zonas, "#zonasSalon"))
            $.post("/model/publis/getTiposSalon.php",    tiposS => addOptions(tiposS, "#tiposSalon"))
            $.post("/model/publis/getEspacios.php",      espacios => addOptions(espacios, "#espacios"))
            $.post("/model/publis/getlServicios.php",    servicios => addOptions(servicios, "#servicios"))
            break;
        case "newEvento":

            break;
        case "newImagenP":

            break;
        case "newTrabajo":

            break;
        case "newIdea":

            break;
    }
}