const listaTPublis = new Array(
    "newServico",
    "newSalon",
    "newEvento",
    "newImagenP",
    "newTrabajo",
    "newIdea"
);
function mostrarNewPost2() {
    var tipo = document.getElementById("tipo");
    var opcion = tipo.options[tipo.selectedIndex];
    for (listaTPublis of publi) document.getElementById(publi).style.display = "none";
    document.getElementById(opcion.value).style.display = "block";
}
function newPost(){
    return false;
}