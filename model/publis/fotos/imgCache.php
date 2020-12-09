<?php
    function getImgCache($dir){
        $gestor_dir = opendir($dir);
        $archivos = array();
        while (false !== ($nombre_fichero = readdir($gestor_dir)))
            array_push($archivos, $nombre_fichero);
        return $archivos;
    }
    function mvImgCache($archivos, $dir){
        foreach ($archivos as $archivo)
            rename($dir.$archivo, $dir.'../'.$archivo);
    }
    function rmImgCache($archivos, $dir){
        foreach ($archivos as $archivo)
            unlink($dir.$archivo);
    }
?>