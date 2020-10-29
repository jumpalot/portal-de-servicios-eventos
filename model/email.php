<?php
    function sendMail($destinatario,$asunto,$cuerpo){
        mail($destinatario,$asunto,$cuerpo,"From:portaldeeventos@us-imm-node5c.000webhost.io");
    }
?>