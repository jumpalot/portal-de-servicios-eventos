<?php
    function getImgCache($dir){
        return array_slice(scandir($dir),2);
    }
    function mvImgCache($archivos, $dir, $tipo){
        foreach ($archivos as $archivo)
            rename("$dir$archivo", "$dir../$tipo/$archivo");
    }
    function rmImgCache($archivos, $dir){
        foreach ($archivos as $archivo)
            unlink($dir.$archivo);
    }
    function rmImgFromDb($archivos, $dir){
        foreach ($archivos as $archivo)
            unlink($dir.$archivo[0]);
    }
    function getFotoP($dir){
        $archivos = getImgCache($dir);
        if(count($archivos)>0) return $archivos[0];
        return 'null';
    }
?>