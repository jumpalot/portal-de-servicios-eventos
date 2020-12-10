<?php
    function getImgCache($dir){
        return scandir($dir);
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