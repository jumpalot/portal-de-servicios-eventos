<?php
    function register($email, $name, $pass, $tel, $fb, $tw, $ig, $web){
        global $db;

        $tel = preg_replace('/[^0-9]+/', '', $tel); //eliminar no numeros del nro de telefono
        $pass = md5($pass);                         //encriptar contraseña
        $opcionales =                               //valores opcionales ausentes se reemplazan por null
            ($fb?"'$fb'":'null') .','.
            ($tw?"'$tw'":'null') .','.
            ($ig?"'$ig'":'null') .','.
            ($web?"'$web'":'null'); 

        if (validemail($email)&&validname($name)&&validtel($tel)&&validmedia($fb, $tw, $ig)&&validweb($web)){ //validacion de datos
            $sql = "INSERT INTO `usuarios`(`nombre`, `pass`, `telefono`, `correo`, `fb`, `tw`, `ig`, `web`)
                    VALUES ('$name','$pass','$tel','$email', $opcionales)";
            $db->query($sql);
            if($db->error=="") return "";
        }
        echo 'noreg';
        return false;
    }
    function login($email, $pass){
        global $db;
        if(validemail($email)){
            $pass = md5($pass);
            $sql = "SELECT id_usuarios As id FROM usuarios WHERE correo='$email' AND pass='$pass'";
            $res = $db->query($sql);
            if($db->error=="" && $res->num_rows>0) {
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['usrId'] = $res->fetch_object()->id;
                return 'verificado';
            }
        }
        return 'noverif';
    }
?>