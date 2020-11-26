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
    var opcion = tipo.options[tipo.selectedIndex];
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
                    var option = document.createElement("option");
                    [option.value, option.text] = zona.split(",");
                    options.add(option);
                });
            })
            $.post("/model/publis/getTiposServicio.php", zonas => {
                var options = $("#tiposServicio")[0].options
                zonas.split(";").forEach(zona => {
                    var option = document.createElement("option");
                    [option.value, option.text] = zona.split(",");
                    options.add(option);
                });
            })
            break;
        case "newSalon":
            $.post("/model/publis/getZonas.php", zonas => {
                var options = $("#zonasSalon")[0].options
                zonas.split(";").forEach(zona => {
                    var option = document.createElement("option");
                    [option.value, option.text] = zona.split(",");
                    options.add(option);
                });
            })
            $.post("/model/publis/getTiposSalon.php", zonas => {
                var options = $("#tiposSalon")[0].options
                zonas.split(";").forEach(zona => {
                    var option = document.createElement("option");
                    [option.value, option.text] = zona.split(",");
                    options.add(option);
                });
            })
            $.post("/model/publis/getEspacios.php", zonas => {
                var options = $("#espacios")[0].options
                zonas.split(";").forEach(zona => {
                    var option = document.createElement("option");
                    [option.value, option.text] = zona.split(",");
                    options.add(option);
                });
            })
            $.post("/model/publis/getlServicios.php", zonas => {
                var options = $("#servicios")[0].options
                zonas.split(";").forEach(zona => {
                    var option = document.createElement("option");
                    [option.value, option.text] = zona.split(",");
                    options.add(option);
                });
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