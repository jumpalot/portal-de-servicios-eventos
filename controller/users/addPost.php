<?php
    include('../../model/publis/fotos/imgCache.php');
    include('../../model/db.php');
    session_start();
    $idUsu = $_SESSION['usrId'];
    $dir = "../../img/$idUsu/cache/";
    if (isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $desc = $_POST['desc'];
        $tipo = $_POST['tipo'];
        $archivos = getImgCache($dir);
        switch($tipo){
            case "servicios":
                $zonaServicio = $_POST["zonas$tipo"];
                $tiposServicio = $_POST["subtipo$tipo"];
                $idServicio = addServicio($nom, $desc, $zonaServicio, $tiposServicio, $idUsu);
                if($idServicio!=null) {
                    if (count($archivos)>0){
                        if($idFotoP = addImgs($tipo, $idServicio, $archivos)){
                            setFotoP($tipo, $idServicio, $idUsu, $idFotoP);
                            mvImgCache($archivos, $dir, 'servicios');
                        } else {
                            echo '<h3 style="text-align:center"> La publicación se subió</h3><h3>Pero ocurrió un error al registrar sus fotos</h3><h3>Puede solucionarlo desdde Mis Publicaciones</h3>';
                            rmImgCache($archivos, $dir);
                            exit;
                        }
                    }
                } else {
                    echo '<h3 style="text-align:center"> No se pudo subir su publicacion</h3><h3>Error al cargar en la base de datos</h3>';
                    rmImgCache($archivos, $dir);
                    exit;
                }
            break;
            case "salon":
                $cap = $_POST['cap'];
                $zonasSalon = $_POST["zonas$tipo"];
                $tipoSalon = $_POST["subtipo$tipo"];
                $espacios = @$_POST['espacios'];
                $servicios = @$_POST['servicios'];
                $idSalon = addSalon($nom, $desc, $cap, $zonasSalon, $tipoSalon, $idUsu);
                if($idSalon!=null){
                    if (count($archivos)>0){
                        if ($idFotoP = addImgs($tipo, $idSalon, $archivos)){
                            if($espacios) addEspaciosSalon ($espacios, $idSalon);
                            if($servicios) addServiciosSalon ($servicios, $idSalon);
                            setFotoP($tipo, $idSalon, $idUsu, $idFotoP);
                            mvImgCache($archivos, $dir, 'salon');
                        } else {
                            echo '<h3 style="text-align:center"> La publicación se subió</h3><h3>Pero ocurrió un error al registrar sus fotos</h3><h3>Puede solucionarlo desdde Mis Publicaciones</h3>';
                            rmImgCache($archivos, $dir);
                            exit;
                        }
                    }
                } else {
                    echo '<h3 style="text-align:center"> No se pudo subir su publicacion.</h3><h3>Error al cargar en la base de datos</h3>';
                    rmImgCache($archivos, $dir);
                    exit;
                }
            break;
            default:
                echo '<h3 style="text-align:center"> No se pudo subir su publicacion</h3><h3>tipo de publicación desconocida</h3>';
                rmImgCache($archivos, $dir);
                exit;
        }
        echo '<h3 style="text-align:center"> La Publicación se subio correctamente. <br> Puede comprar mejoras para su publicación desde "Mis Publicaciones" </h3>';
    }
?>