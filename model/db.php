<?php
    function getUsuario($id){
        global $db;
        $sql = "SELECT id_usuarios As id, nombre, telefono, correo, fb, tw, ig, web
                FROM usuarios 
                WHERE id_usuarios=$id";
        return $db->query($sql)->fetch_object();
    }
    function addSalon($nom, $desc, $capacidad, $zonaSalon, $tipoSalon, $idUsuario){
        global $db;
        $sql = "INSERT INTO salon(nombre, descripcion, capacidad, id_zona, id_tiposalon, id_usuario) 
                VALUES ('$nom', '$desc', '$capacidad', '$zonaSalon','$tipoSalon','$idUsuario')";
        $db->query($sql);
        if ($db->error) return null;
        return $db->insert_id;
    }
    function addSalonImgs($idSalon, $basenames){
        global $db;
        $sql = "INSERT INTO fotosSalon(foto, id_salon) VALUES";
        foreach ($basenames as $basename) 
            $sql .= " ('$basename', $idSalon),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
    }
    function addEspaciosSalon($espacios, $idSalon){
        global $db;
        $sql = "INSERT INTO salon_espacio(id_espacios, id_salon) VALUES";
        foreach ($espacios as $espacio) 
            $sql .= " ('$espacio', '$idSalon'),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
    }
    function addServiciosSalon($servicios, $idSalon){
        global $db;
        $sql = "INSERT INTO salon_espacio(id_espacios, id_salon) VALUES";
        foreach ($servicios as $servicio) 
            $sql .= " ('$servicio', '$idSalon'),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
    }
    function addServicio($nom, $desc, $zonaServicio, $tiposServicio, $idUsuario){
        global $db;
        $sql = "INSERT INTO servicios(nombre, descripcion, id_zona, id_tiposervicio, id_usuario) 
                VALUES ('$nom','$desc','$zonaServicio','$tiposServicio','$idUsuario')";
        $db->query($sql);
        if ($db->error) return null;
        return $db->insert_id;
    }
    function addServicioImgs($idServicio, $basenames){
        global $db;
        $sql = "INSERT INTO fotosServicios(foto, id_servicios) VALUES";
        foreach ($basenames as $basename) 
            $sql .= " ('$basename', $idServicio),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
    }
    //$db = new mysqli('localhost','root','usbw','id14864471_portal');
    $db = new mysqli('localhost','id14864471_elportaldeservicioseventos','zcU.L^H]2e5=&Y52','id14864471_portal');
?>