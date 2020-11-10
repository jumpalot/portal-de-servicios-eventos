<?php
    include('../db.php');
    include('../validations.php');
    include('../email.php');
    include('./account.php');
    if (@$_POST['code']){                                                       //si la pagina envio un codigo
        if(verificarCodigo($_POST['code'], $_POST['email'])){                   //lo verifico
            echo register(                                                      //devuelvo el id del nuevo usuario
                $_POST['email'], $_POST['name'], $_POST['pass'], $_POST['tel'],
               @$_POST['fb'],   @$_POST['tw'],  @$_POST['ig'],  @$_POST['web']
            );
        } else echo 'noverif';                                                    //si no verifica lo aviso
    } else enviarCodigo($_POST['email']);                                       //si no me enviaron un codigo lo envio
?>