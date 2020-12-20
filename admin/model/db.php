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
    $db = new mysqli('localhost','u812890733_Jpgardey','G12345678y','u812890733_Portalgardey');
?>