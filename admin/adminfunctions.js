function login(){
    $.post(
        './model/login.php',
        $('form#login').serialize(),
        msg => {
            if(msg=='invalid') $('#loginfail')[0].style.display = 'block';
        }
    ); 
}