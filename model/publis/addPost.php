<?php
    include('./fotos/imgCache.php');
    include('../db.php');
    session_start();
    $idUsu = $_SESSION['usrId'];
    $dir = "../../img/$idUsu/cache/";
    if (isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $desc = $_POST['desc'];
        $tipo = $_POST['tipo'];
        $archivos = getImgCache($dir);
        switch($tipo){
            case "newServicio":
                $zonaServicio = $_POST['zonaServicio'];
                $tiposServicio = $_POST['tiposServicio'];
                $idServicio = addServicio($nom, $desc, $zonaServicio, $tiposServicio, $idUsu);
                if($idServicio!=null) addServicioImgs($idServicio, $archivos);
            break;
            case "newSalon":
                $cap = $_POST['cap'];
                $zonasSalon = $_POST['zonasSalon'];
                $tipoSalon = $_POST['tipoSalon'];
                $espacios = $_POST['espacios'];
                $servicios = $_POST['servicios'];
                $idSalon = addSalon($nom, $desc, $cap, $zonasSalon, $tipoSalon, $idUsu);
                if($idSalon!=null){
                    addServicioImgs($idSalon, $archivos);
                    addEspaciosSalon($espacios, $idSalon);
                    addServiciosSalon($servicios, $idSalon);
                }
            break;
            default:
                echo '<h1> No se pudo subir su publicacion</h1>';
                rmImgCache($archivos, $dir);
                exit;
        }
        echo '<h1> La Publicación se subio correctamente. Puede comprar mejoras para su publicación desde "Mis Publicaciones" </h1>';
    }
?>