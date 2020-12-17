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
        if ($db->error) {
            echo '<script>console.log("'.$db->error.'");</script>';
            return null;
        }
        return $db->insert_id;
    }
    function addSalonImgs($idSalon, $basenames){
        global $db;
        $sql = "INSERT INTO fotosSalon(foto, id_salon) VALUES";
        foreach ($basenames as $basename) 
            $sql .= " ('$basename', $idSalon),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
        if($db->error!="") return null;
        return $db->insert_id;
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
    function addServicio($nom, $desc, $zonaServicio, $tiposServicio, $idUsuario){
        global $db;
        $sql = "INSERT INTO servicios(nombre, descripcion, id_zona, id_tiposervicio, id_usuario) 
                VALUES ('$nom','$desc','$zonaServicio','$tiposServicio','$idUsuario')";
        $db->query($sql);
        if ($db->error) {
            echo '<script>console.log("'.$db->error.'");</script>';
            return null;
        }
        return $db->insert_id;
    }
    function addServicioImgs($idServicio, $basenames){
        global $db;
        $sql = "INSERT INTO fotosServicios(foto, id_servicios) VALUES";
        foreach ($basenames as $basename) 
            $sql .= " ('$basename', $idServicio),";
        $sql = substr($sql, 0, -1);
        $db->query($sql);
        if($db->error!="") return null;
        return $db->insert_id;
    }
    function getSalones($id=null){
        global $db;
        $sql = "SELECT 
                    salon.id_salon AS id,
                    salon.nombre AS nombre,
                    salon.descripcion AS descripcion,
                    salon.capacidad as capacidad,
                    salon.nivel as nivel,
                    salon.descuento as descuento,
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
                    servicios.descuento as descuento,
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
    function getTiposervicios(){
        global $db;
        $sql = "SELECT lservicios.nombre AS nombre FROM lservicios";
        return $db->query($sql);
    }
    function getNivel($tipo, $idPub, $idUsu){
        global $db;
        $sql = "SELECT nivel FROM $tipo WHERE id_$tipo=$idPub AND id_usuario=$idUsu";
        $datos = $db->query($sql);
        if ($db->error=="") return $datos->fetch_object()->nivel;
        return 4;
    }
    function getPublis($id){
        return [getServicios($id), getSalones($id)];
    }
    function getFotosPubli($tipo, $idPub, $idUsu, $soloUnicas = false) {
        global $db;
        $uctipo = ucfirst($tipo);
        $sql = "SELECT
                    fp.foto AS foto,
                    fp.id_$tipo AS idPub
                FROM
                    fotos$uctipo AS fp
                NATURAL JOIN $tipo 
                WHERE 
                    $tipo.id_usuario = $idUsu";
        if ($soloUnicas) $sql .= "
                GROUP BY
                    foto
                HAVING
                    COUNT(*) < 2";
        $sql .= " AND fp.id_$tipo=$idPub";
        return $db->query($sql);
    }
    function rmPubli($tipo, $idPub, $idUsu){
        global $db;
        $sql = "DELETE FROM $tipo WHERE id_$tipo=$idPub AND id_usuario=$idUsu";
        $db->query($sql);
        return $db->affected_rows>0;
    }
    function setFotoP($tipo, $idPub, $idUsu, $idFoto){
        global $db;
        $sql = "UPDATE $tipo SET id_fotoPrincipal=$idFoto WHERE id_$tipo=$idPub AND id_usuario=$idUsu";
        $db->query($sql);
        if ($db->error) echo '<script>console.log("Foto principal: '.$db->error.'");</script>';
        return $db->error=="";
    }
    function upPub($nivel, $tipo, $idPub, $idUsu){
        global $db;
        $sql = "UPDATE $tipo SET nivel=$nivel WHERE id_$tipo=$idPub AND id_usuario=$idUsu";
        $db->query($sql);
        if ($db->error) echo '<script>console.log("'.$db->error.'");</script>';
        return $db->error=="";
    }
    //$db = new mysqli('localhost','root','usbw','id14864471_portal');
    $db = new mysqli('localhost','u812890733_Jpgardey','G12345678y','u812890733_Portalgardey');
?>