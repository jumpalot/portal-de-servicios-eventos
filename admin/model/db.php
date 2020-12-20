<?php
    function getServiciosByEmail($email){
        global $db;
        $sql = "SELECT 
                    servicios.id_servicios AS id,
                    servicios.nombre AS nombre
                FROM servicios
                WHERE correo='$email'";
        return $db->query($sql);
    }
    function getSalonesByEmail($email){
        global $db;
        $sql = "SELECT 
                    salon.id_salon AS id,
                    salon.nombre AS nombre
                FROM salon
                WHERE correo='$email'";
        return $db->query($sql);
    }
    $db = new mysqli('localhost','u812890733_Jpgardey','G12345678y','u812890733_Portalgardey');
?>