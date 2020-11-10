<?php
    function validemail($email){
        return preg_match("/^[a-zA-Z0-9\-_]{10,25}$/", $email);
    }
    function validcode($code){
        return preg_match("/^[A-Z0-9]{6}$/", $code);
    }
    function validname($name){
        return preg_match("/^[A-Za-z]{3,20}$/", $name);
    }
    function validtel($tel){
        return preg_match("/[0-9]{10,20}/", $tel);
    }
    function validmedia($fb, $tw, $ig){
        return (!$tw|preg_match("/@([A-Za-z0-9_]{3,16})/", $tw)) &
               (!$fb|preg_match("/([A-Za-z0-9_]{3,20})/", $fb))  &
               (!$ig|preg_match("/@([A-Za-z0-9_]{3,16})/", $ig)) ;
    }
    function validweb($web){
        return preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $web);
    }
?>