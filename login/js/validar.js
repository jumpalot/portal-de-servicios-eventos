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
function validar() {
  $.post("../model/accounts/register.php", { email: $('#regi #email').val() }, msg => {
      if(msg=='invalidEmail'){
        $('#regi #email')[0].setCustomValidity("email ya registrado");
      } else {
        $('#regi #email')[0].setCustomValidity("");
      }
      $('form#regi').submit()
  });
}
function registro() {
  if($('#verifmail')[0].style.display != "block" && $('#code').val()==""){
    $('#verifmail')[0].style.display = "block";
    $('#regi1')[0].style.display = "none";
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