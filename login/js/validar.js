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
  $('#verifmail')[0].style.display = "block";
  $('#regi')[0].style.display = "none";
  $.post("../model/accounts/emailverify.php", { email: $('#email').val() });
}
function verificar(){
  $.post(
    "../model/accounts/emailverify.php",  { code: $("#code").val(), email: $('#email').val() },
    (msg) => {              
        if(msg=='true') window.locationf="../";
        else $("#failcode")[0].style.display="block";
    }
  );
}