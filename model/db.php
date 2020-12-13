<?php
    function getUsuario($id){
        global $db;
        $sql = "SELECT id_usuarios As id, nombre, telefono, correo, fb, tw, ig, web
                FROM usuarios 
                WHERE id_usuarios=$id";
        return $db->query($sql)->fetch_object();
    }
    function addSalon($nom, $desc, $capacidad, $zonaSalon, $tipoSalon, $idUsuario, $idFotoPrincipal){
        global $db;
        $sql = "INSERT INTO salon(nombre, descripcion, capacidad, id_zona, id_tiposalon, id_usuario, id_fotoPrincipal) 
                VALUES ('$nom', '$desc', '$capacidad', '$zonaSalon','$tipoSalon','$idUsuario', '$idFotoPrincipal')";
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
        $sql = "INSERT INTO salon_lservicio(id_salon, id_lservicio) VALUES";
        foreach ($servicios as $servicio) 
            $sql .= " ('$idSalon', '$servicio'),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
    }
    function addServicio($nom, $desc, $zonaServicio, $tiposServicio, $idUsuario, $idFotoPrincipal){
        global $db;
        $sql = "INSERT INTO servicios(nombre, descripcion, id_zona, id_tiposervicio, id_usuario, id_fotoPrincipal) 
                VALUES ('$nom','$desc','$zonaServicio','$tiposServicio','$idUsuario', '$idFotoPrincipal')";
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
    function getSalones($id=null){
        global $db;
        $sql = "SELECT 
                    salon.id_salon AS id,
                    salon.nombre AS nombre,
                    salon.descripcion AS descripcion,
                    salon.capacidad as capacidad,
                    salon.nivel as nivel,
                    zonas.zona as zona,
                    tiposalon.nombre as tipo,
                    fotosSalon.foto as foto
                FROM salon
                NATURAL LEFT JOIN zonas
                LEFT JOIN tiposalon 
                    ON salon.id_tiposalon=tiposalon.id_tiposalon
                LEFT JOIN fotosSalon 
                    ON salon.id_fotoPrincipal=fotosSalon.id_fotos 
                    AND salon.id_salon=fotosSalon.id_salon";
        if(@$id) $sql .= " WHERE salon.id_usuario='$id'";
        return $db->query($sql);
    }
    function getServicios($id=null){
        global $db;
        $sql = "SELECT 
                    servicios.id_servicios AS id,
                    servicios.nombre AS nombre,
                    servicios.descripcion AS descripcion,
                    servicios.nivel as nivel,
                    zonas.zona as zona,
                    tiposervicio.nombre as tipo,
                    fotosServicios.foto as foto
                FROM servicios
                NATURAL LEFT JOIN zonas
                LEFT JOIN tiposervicio
                    ON servicios.id_tiposervicio = tiposervicio.id_tiposervicio
                LEFT JOIN fotosServicios 
                    ON servicios.id_fotoPrincipal=fotosServicios.id_fotos 
                    AND servicios.id_servicios=fotosServicios.id_servicios";
        if (@$id) $sql .= " WHERE servicios.id_usuario='$id'";
        return $db->query($sql);
    }
    function getPublis($id){
        return [getServicios($id), getSalones($id)];
    }
    function rmPubli($tipo, $idPub, $idUsu){
        global $db;
        $sql = "DELETE FROM $tipo WHERE id_$tipo=$idPub AND id_usuario=$idUsu";
        $db->query($sql);
    }
    //$db = new mysqli('localhost','root','usbw','id14864471_portal');
    $db = new mysqli('localhost','id14864471_elportaldeservicioseventos','zcU.L^H]2e5=&Y52','id14864471_portal');
?>