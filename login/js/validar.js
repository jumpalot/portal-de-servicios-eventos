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
function registro() {
  $('[type=submit]').addClass("progress");
  if($('#verifmail')[0].style.display != "block" && $('#code').val()==""){
    $.post("../model/accounts/register.php", { email: $('#regi #email').val() }, msg => {
      if(msg!='invalidEmail'){
        $('#duplicatemail')[0].style.display = "none"
        $('#verifmail')[0].style.display = "block";
        $('#regi1')[0].style.display = "none";
      } else $('#duplicatemail')[0].style.display = "block";
      $('[type=submit]').removeClass("progress");
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
        $('[type=submit]').removeClass("progress");
    });
  }
  return false;
}
function login(){
  $.post(
      "../model/accounts/login.php", $('form#login').serialize(),
      (msg) => {    
        if(msg=='noverif') $("#loginfail")[0].style.display="block";
        else window.location="http://portalgardey.escuelarobertoarlt.com.ar/";
      }
    );
}