<?php
    function validemail($email){
        return preg_match("/^[a-zA-Z0-9\-_.]{3,20}@[a-zA-Z]{2,10}\.[a-zA-Z\.]{2,8}$/", $email);
    }
    function validcode($code){
        return preg_match("/^[A-Z0-9]{6}$/", $code);
    }
    function validname($name){
        return preg_match("/^[A-Za-z0-9 ]{3,20}$/", $name);
    }
    function validtel($tel){
        return preg_match("/[0-9]{10,20}/", $tel);
    }
    function validmedia($fb, $tw, $ig){
        return (!$tw|preg_match("/@([A-Za-z0-9ñ_]{3,16})/", $tw)) &
               (!$fb|preg_match("/([A-Za-z0-9ñ_]{3,20})/", $fb))  &
               (!$ig|preg_match("/@([A-Za-z0-9ñ_]{3,16})/", $ig)) ;
    }
    function validweb($web){
        return (!$web|preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&ñ@#\/%=~_|]/i", $web));
    }
?>