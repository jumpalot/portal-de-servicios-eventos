<?php
    include '../db.php';
    include '../validations.php';

    session_start();
    $idUsu = $_SESSION['usrId'];

    $name = $_POST['name'];
    $tel = preg_replace('/[^0-9]+/', '', $_POST['tel']);
    $fb =  @$_POST['fb']; 
    $ig =  @$_POST['ig']; 
    $tw =  @$_POST['tw']; 
    $web = @$_POST['web'];

    if (validname($name) && validtel($tel) && validmedia($fb, $tw, $ig) && validweb($web)){
        if (updateUser($idUsu, $name, $tel, $fb, $ig, $tw, $web)){
            echo '<h4> Se actualizaron sus datos correctamente </h4>';
        } else {
            echo '<h4>Ocurrio un problema al actualizar sus datos</h4>';
            echo '<h4>Compruebelos y si el problema persiste, contacte con el administrador</h4>';
        }
    } else {
        echo '<h4>Algunos de los datos ingresados son incompatibles</h4>';
        echo '<h4>Compruebelos y si el problema persiste, contacte con el administrador</h4>';
    }
?>