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
  if($('#regi1')[0].style.display != "none"){
    $('#verifmail')[0].style.display = "block";
    $('#regi1')[0].style.display = "none";
    $.post("../model/accounts/register.php", { email: $('#email').val() });
    return false;
  } else {
    $.post(
      "../model/accounts/register.php", $('form#regi').serialize(),
      (msg) => {    
        if(msg=='noverif') $("#failverif")[0].style.display="block";
        else if(msg=='noreg') {
          $('#regi1')[0].style.display = "block";
          $("#failreg")[0].style.display="block";
        }
        else window.location="../?auth="+msg;
      }
    );
    return false;
  }
}