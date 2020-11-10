<?php
    function getUsuario($id){
        global $db;
        $sql = "SELECT id_usuarios As id, nombre, telefono, correo, fb, tw, ig, web
                FROM usuarios 
                WHERE id_usuarios=$id";
        return $db->query($sql)->fetch_object();
    }
    //$db = new mysqli('localhost','root','usbw','id14864471_portal');
    $db = new mysqli('localhost','id14864471_elportaldeservicioseventos','zcU.L^H]2e5=&Y52','id14864471_portal');
?>