/*function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}*/
function mostrarReg() {
  $("#login")[0].style.display ="none";
  $("#regi")[0].style.display ="block";
}
function mostrarLogin() {
  $("#login")[0].style.display = "block";
  $("#regi")[0].style.display = "none";
}
function mostrarRecu() {
  $("#login")[0].style.display = "none";
  $("#recuperar")[0].style.display = "block";
}
function recuToLog() {
  $("#recuperar")[0].style.display = "none";
  $("#login")[0].style.display = "block";
}
function loading(){
  $('.body-login').addClass("loading");
  $('.body-login [type=submit]').attr("disabled", true);
}
function endloading(){
  $('.body-login').removeClass("loading");
  $('.body-login [type=submit]').attr("disabled", false);
}
function irA(id){
  $('html, body').animate({
    scrollTop: $("#"+id).offset().top
  }, 1000);
}
function registro() {
  $('#nocoinem')[0].style.display = "none";
  $('#nocoinpas')[0].style.display = "none";
  $('#duplicatemail')[0].style.display = "none";
  $("#failverif")[0].style.display="none";
  if($('#email').val()!=$('#cemail').val()){
    $('#nocoinem')[0].style.display = "block";
    irA('email');
  } else if ($('#pass').val()!=$('#cpass').val()) {
    $('#nocoinpas')[0].style.display = "block";
    irA('pass');
  } else {
    loading();
    if($('#verifmail')[0].style.display != "block" && $('#code').val()==""){
      $.post("../model/accounts/register.php", { email: $('#regi #email').val() }, msg => {
        if(msg!='invalidEmail'){
          $('#verifmail')[0].style.display = "block";
          $('#regi1')[0].style.display = "none";
        } else {
          $('#duplicatemail')[0].style.display = "block";
          irA('email');
        }
        endloading();
      });
    } else {
      $.post(
        "../model/accounts/register.php", $('form#regi').serialize(),
        msg => {    
          if(msg=='noverifcode') $("#failverif")[0].style.display="block";
          else if(msg=='noreg') {
            $('#regi1')[0].style.display = "block";
            $("#failreg")[0].style.display="block";
            $('#verifmail')[0].style.display = "none";
          }
          else window.location="http://portalgardey.escuelarobertoarlt.com.ar/";
          endloading();
      });
    }
  }
  return false;
}
function login(){
  loading();
  $('#recutrue')[0].style.display="none";
  $.post(
      "../model/accounts/login.php", $('form#login').serialize(),
      msg => {    
        if(msg=='noverif') $("#loginfail")[0].style.display="block";
        else window.location="http://portalgardey.escuelarobertoarlt.com.ar/";
        endloading();
      }
  );
}
function recuperar(){
  loading();
  $("#noemail")[0].style.display="none";
  $("#invemail")[0].style.display="none";
  $.post(
      "../model/accounts/recuperar.php", $('form#recu').serialize(),
      msg => {    
        if(msg=='noemail') $("#noemail")[0].style.display="block";
        else if (msg=='invemail') $("#invemail")[0].style.display="block";
        else if (msg=='') {
          $("form#recu")[0].style.display="none";
          $("form#verifrecu")[0].style.display="block";
        }
        else $("#unerror")[0].style.display="block";
        endloading();
      }
  );
}
function verifrecu(){
  loading();
  $('#failverifrecu')[0].style.display="none";
  $('#nocoin')[0].style.display="none";
  $('#unkfail')[0].style.display="none";
  if ($('#p1').val()!=$('#p2').val()){
    $('#nocoin')[0].style.display="block";
    endloading();
  }
  else  $.post (
    "../model/accounts/validrecuperar.php",
    {
      email:$('form#recu #rmail').val(),
      code:$('form#verifrecu #rcode').val(),
      pass:$('form#verifrecu #p1').val()
    }, 
    msg => {
      if (msg == 'noverif') $('#failverifrecu')[0].style.display="block";
      else if (msg == '') {
        recuToLog();
        $('#recutrue')[0].style.display="block";
      }
      else $('#unkfail')[0].style.display="block";
      endloading();
    }
  );
}