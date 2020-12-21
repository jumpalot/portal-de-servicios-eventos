<?php
    function getServiciosByEmail($email){
        global $db;
        $sql = "SELECT 
                    servicios.id_servicios AS id,
                    servicios.nombre AS nombre
                FROM servicios
                INNER JOIN usuarios ON servicios.id_usuario=usuarios.id_usuarios
                WHERE usuarios.correo='$email'";
        $data = $db->query($sql);
        if ($db->error) echo $sql;
        return $data;
    }
    function getSalonesByEmail($email){
        global $db;
        $sql = "SELECT 
                    salon.id_salon AS id,
                    salon.nombre AS nombre
                FROM salon
                INNER JOIN usuarios ON salon.id_usuario=usuarios.id_usuarios
                WHERE usuarios.correo='$email'";
        $data = $db->query($sql);
        if ($db->error) echo $sql;
        return $data;
    }
    function addTipoSalon($ts){
        global $db;
        $sql = "INSERT INTO tiposalon VALUES (null, '$ts')";
        $db->query($sql);
        return $db->error=="";
    }
    function addTipoServicio($ts){
        global $db;
        $sql = "INSERT INTO tiposervicios VALUES (null, '$ts')";
        $db->query($sql);
        return $db->error=="";
    }
    function addZonas($zona){
        global $db;
        $sql = "INSERT INTO zonas VALUES (null, '$zona')";
        $db->query($sql);
        return $db->error=="";
    }
    function rmZona($zona){
        global $db;
        $sql = "DELETE FROM zonas WHERE id_zona='$zona'";
        $db->query($sql);
        return $db->error=="" && $db->affected_rows;
    }
    function rmTipoServicio($ts){
        global $db;
        $sql = "DELETE FROM tiposervicios WHERE id_tiposervicios='$ts'";
        $db->query($sql);
        return $db->error=="" && $db->affected_rows;
    }
    function rmTipoSalon($ts){
        global $db;
        $sql = "DELETE FROM tiposalon WHERE id_tiposalon='$ts'";
        $db->query($sql);
        return $db->error=="" && $db->affected_rows;
    }
    function rmUsuario($email){
        global $db;
        $sql = "DELETE FROM usuarios WHERE correo='$email'";
        $db->query($sql);
        return $db->error=="" && $db->affected_rows;
    }
    function rmServicios($servicios){
        global $db;
        $sql = "DELETE FROM servicios WHERE id_servicios='$servicios'";
        $db->query($sql);
        return $db->error=="" && $db->affected_rows;
    }
    function rmSalon($salon){
        global $db;
        $sql = "DELETE FROM salon WHERE id_salon='$salon'";
        $db->query($sql);
        return $db->error=="" && $db->affected_rows;
    }
    function getIdUsu($email){
        global $db;
        $sql = "SELECT id_usuarios AS id FROM usuarios WHERE correo='$email'";
        $data = $db->query($sql);
        if($db->error) return null;
        $usuario = $data->fetch_object();
        if ($usuario==null) return null;
        return $usuario->id;
    }
    function getFotosPubli($tipo, $idPub, $idUsu) {
        global $db;
        $uctipo = ucfirst($tipo);
        $sql = "SELECT
                    fp.foto AS foto,
                    fp.id_fotos AS idFoto,
                    fp.id_$tipo AS idPub
                FROM
                    fotos$uctipo AS fp
                NATURAL JOIN $tipo 
                WHERE 
                    $tipo.id_usuario = $idUsu
                GROUP BY
                    foto
                HAVING
                    COUNT(*) < 2";
        $sql .= " AND fp.id_$tipo=$idPub";
        return $db->query($sql);
    }
    $db = new mysqli('localhost','u812890733_Jpgardey','G12345678y','u812890733_Portalgardey');
?>