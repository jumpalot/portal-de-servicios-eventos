$.fn.selectpicker.Constructor.BootstrapVersion = '4';
const listaTPublis = new Array(
    "newServicio",
    "newSalon",
    "newEvento",
    "newImagenP",
    "newTrabajo",
    "newIdea"
);
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
            $.post("/model/publis/getZonas.php", zonas => {
                var options = $("#zonasServicio")[0].options
                zonas.split(";").forEach(zona => {
                    if (zona!=""){
                        var option = document.createElement("option");
                        [option.value, option.text] = zona.split(",");
                        options.add(option);
                    }
                });
                $("#zonasServicio")[0].selectpicker('refresh');
            })
            $.post("/model/publis/getTiposServicio.php", zonas => {
                var options = $("#tiposServicio")[0].options
                zonas.split(";").forEach(zona => {
                    if (zona!=""){
                        var option = document.createElement("option");
                        [option.value, option.text] = zona.split(",");
                        options.add(option);
                    }
                });
                $("#tiposServicio")[0].selectpicker('refresh');
            })
            break;
        case "newSalon":
            $.post("/model/publis/getZonas.php", zonas => {
                var options = $("#zonasSalon")[0].options
                zonas.split(";").forEach(zona => {
                    if (zona!=""){
                        var option = document.createElement("option");
                        [option.value, option.text] = zona.split(",");
                        options.add(option);
                    }
                });
                $("#zonasSalon")[0].selectpicker('refresh');
            })
            $.post("/model/publis/getTiposSalon.php", zonas => {
                var options = $("#tiposSalon")[0].options
                zonas.split(";").forEach(zona => {
                    if (zona!=""){
                        var option = document.createElement("option");
                        [option.value, option.text] = zona.split(",");
                        options.add(option);
                    }
                });
                $("#tiposSalon")[0].selectpicker('refresh');
            })
            $.post("/model/publis/getEspacios.php", zonas => {
                var options = $("#espacios")[0].options
                zonas.split(";").forEach(zona => {
                    if (zona!=""){
                        var option = document.createElement("option");
                        [option.value, option.text] = zona.split(",");
                        options.add(option);
                    }
                });
                $("#espacios")[0].selectpicker('refresh');
            })
            $.post("/model/publis/getlServicios.php", zonas => {
                var options = $("#servicios")[0].options
                zonas.split(";").forEach(zona => {
                    if (zona!=""){
                        var option = document.createElement("option");
                        [option.value, option.text] = zona.split(",");
                        options.add(option);
                    }
                });
                $("#servicios")[0].selectpicker('refresh');
            })
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