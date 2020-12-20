<?php
    include('../db.php');
    include('../validations.php');
    include('../email.php');
    include('./account.php');
    if (@$_POST['code']){                                                       //si la pagina envio un codigo
        if(verificarCodigo($_POST['code'], $_POST['email'])){                   //lo verifico
            if (register(                                                      //devuelvo el id del nuevo usuario
                $_POST['email'], $_POST['name'], $_POST['pass'], $_POST['tel'],
               @$_POST['fb'],   @$_POST['tw'],  @$_POST['ig'],  @$_POST['web']
            )) echo login($_POST['email'], $_POST['pass']);
        } else echo 'noverifcode';                                                    //si no verifica lo aviso
    } else {    
        if (validemail($_POST['email'])){                                           //verifico que el email sea valido
            if (existsEmail($_POST['email'])){                                      //verifico que no exista en la db
                echo 'invalidEmail';
            } else echo enviarCodigo($_POST['email']);                                    //si no me enviaron un codigo lo envio
        } else echo 'invalidEmail';
    }
?>