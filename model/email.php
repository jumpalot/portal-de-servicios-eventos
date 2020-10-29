<?php
    function sendMail($destinatario,$asunto,$cuerpo){
        mail($destinatario,$asunto,$cuerpo,"From:portaldeeventos@us-imm-node5c.000webhost.io");
    }
    function generarCodigo() {
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        $key = '';
        for($i=0;$i < 6;$i++) $key .= $pattern[mt_rand(0,$max)];
        return $key;
    }
?>