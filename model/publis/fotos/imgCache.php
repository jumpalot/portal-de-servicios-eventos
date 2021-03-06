<?php
    function getImgCache($dir){
        return array_slice(scandir($dir),2);
    }
    function mvImgCache($archivos, $dir, $tipo){
        $newdir="$dir../$tipo/";
        if(!file_exists ("$dir../$tipo/"))
            mkdir($newdir, 0777, true);
        foreach ($archivos as $archivo)
            rename("$dir$archivo", "$newdir$archivo");
    }
    function rmImgCache($archivos, $dir){
        foreach ($archivos as $archivo)
            unlink($dir.$archivo);
    }
    function rmImgFromDb($archivos, $dir){
        while ($archivo = $archivos->fetch_array(MYSQLI_ASSOC)){
            unlink($dir.$archivo['foto']);
        }
    }
    function rmTree($dir) {
        if (file_exists($dir)){
            $files = array_diff(scandir($dir), array('.','..'));
            foreach ($files as $file)
                if (is_dir("$dir/$file")) 
                     rmTree("$dir/$file");
                else unlink("$dir/$file");
            return rmdir($dir);
        }
        return true;
    }
?>