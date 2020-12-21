<?php
    session_start();
    if (@$_SESSION['adminlogin']){
        include './db.php';
        $email = $_POST['email'];
        if (rmUsuario($email))
            echo 'Se elimino correctamente el usuario';
        else
            echo 'Ocurrio un error al eliminar el usuario';
    }
?>