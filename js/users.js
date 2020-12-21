var nivelActualPub = 0;
var trash = "";
$(document).ready(()=>{
    $.fn.selectpicker.Constructor.BootstrapVersion = '4';
    $('#ddusuarios').hover(
        ()=>{
            $('#ddusuarios').addClass('show')
            $('#ddusuarios .dropdown-menu').addClass('show')
        },
        ()=>{
            $('#ddusuarios').removeClass('show')
            $('#ddusuarios .dropdown-menu').removeClass('show')
        }
    );
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
            url: "./model/publis/fotos/setFotos.php",
            addRemoveLinks: true,
            paramName: "fotos",
            maxFilesize: 20, // MB
            dictRemoveFile: "Remover",
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
                $.post("./model/publis/fotos/rmCacheFoto.php", {
                    foto: foto
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        }
        let myDropzone = new Dropzone("#dZUpload", dzOptions);
    });
    $('#newPostModal').on('hidden.bs.modal', event => {
        $("#formDropZone").empty();
    });
    $("#myPubsModal").on('show.bs.modal', event => {
        $.post('./controller/users/getPosts.php', msg => $("#mispublis").html(msg));
    });
    $('#editFotosModal').on('show.bs.modal', event => {
        $("#form-dz-edit").append(
            "<form id='ed-dZUpload' class='dropzone borde-dropzone'>"+
                "<div class='dz-default dz-message'>"+
                    "<span><h5>Arrastra las fotos de tu publicación aquí</h5></span><br>"+
                    "<p>(o Clic para seleccionar)</p>"+
                "</div>"+
            "</form>"
        );
        let dzOptions = {
            url: "./model/publis/fotos/setFotos.php",
            addRemoveLinks: true,
            paramName: "fotos",
            maxFilesize: 20, // MB
            dictRemoveFile: "Remover",
            success: (file, response) => {
                var imgName = response;
                file.previewElement.classList.add("dz-success");
                console.log("Successfully uploaded :" + imgName);
            },
            error: (file, res) => {
                file.previewElement.classList.add("dz-error");
                console.log(res)
            },
            removedfile: file => {
                var foto = file.name; 
                $.post("./model/publis/fotos/rmCacheFoto.php", {
                    foto: foto
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            }
        }
        let myDropzone = new Dropzone("#ed-dZUpload", dzOptions);
    });
    $('#editFotosModal').on('hidden.bs.modal', event => {
        $('#editFotosModal #body-content').empty();
        trash="";
    });
});
const listaTPublis = new Array(
    "servicios",
    "salon",
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
    inicializarSelects(opcion.value, '#newPostModal');
}
function newPost(){
    $.post('./controller/users/addPost.php', $("form#np").serialize(), (res)=>{
        $('div#result').html(res);
        $('div#resultModal').modal('show');
    });
}
function inicializarSelects(id, modal){
    switch (id){
        case "servicios":
            if (isEmpty(modal+" #servicios select.zonas")){
                $.post("./model/publis/getZonas.php",         zonas => addOptions(zonas, modal+" #servicios select.zonas"))
                $.post("./model/publis/getTiposServicio.php", tiposS => addOptions(tiposS, modal+" #servicios select.subtipo", modal))
            }
            break;
        case "salon":
            if (isEmpty(modal+" #salon select.zonas")){
                $.post("./model/publis/getZonas.php",         zonas => addOptions(zonas, modal+" #salon select.zonas"))
                $.post("./model/publis/getTiposSalon.php",    tiposS => addOptions(tiposS, modal+" #salon select.subtipo"))
                $.post("./model/publis/getEspacios.php",      espacios => addOptions(espacios, modal+" select#espacios"))
                $.post("./model/publis/getlServicios.php",    servicios => addOptions(servicios, modal+" select#servicios"))
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
function selectOption(idSelect, modal, toSelect){
    $(modal+' '+idSelect).selectpicker('val', toSelect);
}
function editarPub(id){
    $('#myPubsModal').modal('hide');
    [tipo, idPub] = id.split('-');
    $('#editPubModal #tituPub').html(
        $('#'+id+' #titulo').html()
    )
    $.post(
        './model/publis/selectPub.php',
        { tipo:tipo, idPub:idPub },
        () => $('#editPubModal').modal('show')
    );
}
function resultToMyPubs(){
    $('#resultModal').modal('hide');
    $('#myPubsModal').modal('show');
}
function editToMyPubs() {
    $('#editPubModal').modal('hide');
    $('#myPubsModal').modal('show');
}
function modifyToEdit() {
    $('#modifyDataModal').modal('hide');
    $('#editPubModal').modal('show');
}
function fotosToEdit() {
    $('#editFotosModal').modal('hide');
    $('#editPubModal').modal('show');
}
function upgradeToEdit() {
    $('#upgradePubModal').modal('hide');
    $('#editPubModal').modal('show');
}
function rmPub(){
    $.post('./model/publis/rmPost.php', msg => editToMyPubs());
}
function modificarDatos(){
    $('#editPubModal').modal('hide');
    $.post(
        "./controller/users/modifyPost.php",
        msg => $('#modifyDataModal #body-content').html(msg)
    );
    $('#modifyDataModal').modal('show');
}
function updatePub(){
    $.post('./model/publis/updatePub.php', $('#modifyDataForm').serialize(), res => {
        $('#modifyDataModal').modal('hide');
        $('#resultModal div#result').html(res);
        $('#resultModal').modal('show');
    });
}
function editarFotos(){
    $('#editPubModal').modal('hide');
    $.post(
        "./controller/users/editFotos.php",
        msg => {
            $('#editFotosModal #body-content').html(msg);
            $('#editFotosModal').modal('show');
        }
    );
}
function updateFotos(){
    $.post(
        "./model/publis/fotos/updateFotos.php",
        {
            fotoP:$('#editFotosModal #originalFotoP').val(),
            nFotoP:$('#editFotosModal input[type=radio]:checked').val(),
            trash:trash.substr(0, trash.length-1)
        },
        res => {
            $('div#result').html(res);
            $('#editFotosModal').modal('hide');
            $('div#resultModal').modal('show');
        }
    );
}
function addToTrash(id){
    trash += id+'-';
    $('#editFotosModal #'+id).parent().parent().hide();
}
function mejorarPublicacion(){
    $('#editPubModal').modal('hide');
    $.post(
        "./controller/users/upgradePub.php",
        msg => {
            $('#upgradePubModal #body-content').html(msg);
            nivelActualPub = $('#upgradePubModal input[type=radio]:checked').val();
            $('#upgradePubModal input[type=radio]').change(() => {
                let nuevoNivelPub = $('#upgradePubModal input[type=radio]:checked').val()
                if(nivelActualPub==nuevoNivelPub)
                    $('#upgradePubModal .btn-success').addClass("hidden");
                else {
                    $('#upgradePubModal .btn-success').text(nuevoNivelPub=="0"?"Cambiar":"Comprar");
                    $('#upgradePubModal .btn-success').removeClass("hidden");
                }
            });
            $('#upgradePubModal').modal('show');
        }
    );
}
function buyUpgrade(){
    $.post(
        "./controller/users/buyUpgrade.php",
        {nivel:$('#upgradePubModal input[type=radio]:checked').val()},
        res => {
            $('div#result').html(res);
            $('#upgradePubModal').modal('hide');
            $('div#resultModal').modal('show');
        }
    );
}