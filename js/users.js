$(document).ready(()=>{
    $.fn.selectpicker.Constructor.BootstrapVersion = '4';
    $('#newPostModal').on('show.bs.modal', event => {
        $("#formDropZone").append(
            "<form id='dZUpload' class='dropzone borde-dropzone'>"+
                "<div class='dz-default dz-message'>"+
                    "<span><h2>Arrastra las fotos de tu publicación aquí</h2></span><br>"+
                    "<p>(o Clic para seleccionar)</p>"+
                "</div>"+
            "</form>"
        );
        let dzOptions = {
            url: "model/publis/fotos/setFotos.php",
            addRemoveLinks: true,
            paramName: "fotos",
            maxFilesize: 20, // MB
            dictRemoveFile: "Remover",
            params: {
                idUsu:$("input#idUsu").val(),
                tipoPub:$("select#tipo").val()
            },
            success: (file, response) => {
                var imgName = response;
                file.previewElement.classList.add("dz-success");
                console.log("Successfully uploaded :" + imgName);
            },
            error: (file, response) => {
                file.previewElement.classList.add("dz-error");
            },
            removedfile: file => {
                var foto = file.name; 
                $.post("model/publis/fotos/rmFoto.php", {
                    foto: foto, 
                    idUsu:$("input#idUsu").val()
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        }
        let myDropzone = new Dropzone("#dZUpload", dzOptions); 
        myDropzone.on("complete", function(file,response) {

        });
    });
    $('#newPostModal').on('hidden.bs.modal', event => {
        $("#formDropZone").empty();
    });
    $("#myPubsModal").on('show.bs.modal', event => {
        $.post('controller/users/getPosts.php', msg => $("#mispublis").html(msg));
    });
    $('#editPubModal').on('hidden.bs.modal', event => {
        $("#edPubInfo").empty();
    });
});
const listaTPublis = new Array(
    "newServicio",
    "newSalon",
    "newEvento",
    "newImagenP",
    "newTrabajo",
    "newIdea"
);
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
const isEmpty = id => $(id)[0].options.length<2
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
    $.post('./model/publis/addPost.php', $("form#np").serialize(), (res)=>{
        $('div#result').html(res);
        $('div#resultModal').modal('show');
    });
}
function inicializarSelects(id){
    switch (id){
        case "newServicio":
            if (isEmpty("#zonasServicio")){
                $.post("/model/publis/getZonas.php",         zonas => addOptions(zonas, "#zonasServicio"))
                $.post("/model/publis/getTiposServicio.php", tiposS => addOptions(tiposS, "#tiposServicio"))
            }
            break;
        case "newSalon":
            if (isEmpty("#zonasSalon")){
                $.post("/model/publis/getZonas.php",         zonas => addOptions(zonas, "#zonasSalon"))
                $.post("/model/publis/getTiposSalon.php",    tiposS => addOptions(tiposS, "#tiposSalon"))
                $.post("/model/publis/getEspacios.php",      espacios => addOptions(espacios, "#espacios"))
                $.post("/model/publis/getlServicios.php",    servicios => addOptions(servicios, "#servicios"))
            }
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
function editarPub(id){
    $('#myPubsModal').modal('hide');
    [tipo, idPub] = id.split('-');
    $('#editPubModal #tituPub').html(
        $('#'+id+' #titulo').html()
    )
    $("#editPubModal #edPubInfo").html(
        '<input type="hidden" id="idPub" value="'+idPub+'">' +
        '<input type="hidden" id="tipoPub" value="'+tipo+'">'
    )
    $('#editPubModal').modal('show');
}
function editToMyPubs() {
    $('#editPubModal').modal('hide');
    $('#myPubsModal').modal('show');
}
function rmPub(){
    $.post(
        "model/publis/rmPost.php",
        {
            idPub:$("#idPub").val(),
            tipo:$('#tipoPub').val()
        }, msg => editToMyPubs()
    );
}