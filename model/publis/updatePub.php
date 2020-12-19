<?php
    include '../db.php';

    session_start();
    $idUsu = $_SESSION['usrId'];
    $tipo = $_SESSION['tipo'];
    $idPub = $_SESSION['idPub'];

    $titulo = $_POST['nom'];
    $zona = $_POST['zonas'];
    $subtipo = $_POST['subtipo'];

    if ($tipo!='salon') {
        if(updateServicio($idPub, $idUsu, $titulo, $zona, $subtipo))
             echo '<h5>Los datos se actualizaron correctamente</h5>';
        else echo '<h5>Ocurrió un problema al actualizar los datos</h5>
                   <h5>Por Favor, vuelva a intentarlo más tarde</h5>';
    } else {
        $cap = $_POST['cap'];
        $espacios = $_POST['espacios'];
        $servicios = $_POST['servicios'];
        if  ( updateSalon($idPub, $idUsu, $titulo, $zona, $subtipo, $cap)        &
            ( rmEspaciosSalon($idPub)  && addEspaciosSalon($espacios, $idPub)  ) &
            ( rmServiciosSalon($idPub) && addServiciosSalon($servicios, $idPub)) ) 
            echo '<h5>Los datos se actualizaron correctamente</h5>';
        else 
            echo '<h5>Algunos datos no se pudieron actualizar</h5>
                  <h5>Por Favor, vuelva a intentarlo más tarde</h5>';
    }
?>