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
                $tiposServicio = $_POST['tipoServicio'];
                $fotoP = getFotoP($dir);
                $idServicio = addServicio($nom, $desc, $zonaServicio, $tiposServicio, $idUsu, $fotoP);
                if($idServicio!=null) {
                    addServicioImgs($idServicio, $archivos);
                    mvImgCache($archivos, $dir);
                } else {
                    echo '<h3 style="text-align:center"> No se pudo subir su publicacion</h3>';
                    rmImgCache($archivos, $dir);
                    exit;
                }
            break;
            case "newSalon":
                $cap = $_POST['cap'];
                $zonasSalon = $_POST['zonasSalon'];
                $tipoSalon = $_POST['tipoSalon'];
                $espacios = $_POST['espacios'];
                $servicios = $_POST['servicios'];
                $fotoP = getFotoP($dir);
                $idSalon = addSalon($nom, $desc, $cap, $zonasSalon, $tipoSalon, $idUsu, $fotoP);
                if($idSalon!=null){
                    addSalonImgs($idSalon, $archivos);
                    addEspaciosSalon($espacios, $idSalon);
                    addServiciosSalon($servicios, $idSalon);
                    mvImgCache($archivos, $dir);
                } else {
                    echo '<h3 style="text-align:center"> No se pudo subir su publicacion</h3>';
                    rmImgCache($archivos, $dir);
                    exit;
                }
            break;
            default:
                echo '<h3 style="text-align:center"> No se pudo subir su publicacion</h3>';
                rmImgCache($archivos, $dir);
                exit;
        }
        echo '<h3 style="text-align:center"> La Publicación se subio correctamente. <br> Puede comprar mejoras para su publicación desde "Mis Publicaciones" </h3>';
    }
?>