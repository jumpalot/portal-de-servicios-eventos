<?php
    function sendMail($destinatario,$asunto,$cuerpo){
        return mail(
            $destinatario,
            $asunto,
            $cuerpo,
            'MIME-Version: 1.0' . "\r\n".
            'Content-Type: text/html; charset=UTF-8'. "\r\n".
            "From:portaldeeventos@us-imm-node5c.000webhost.io"
        );
    }
    function generarCodigo() {
        $pattern = '1234567890ABCDEFGHIJKLOPQRSTUVWXYZ';
        $max = strlen($pattern)-1;
        $key = '';
        for($i=0;$i < 6;$i++) $key .= $pattern[mt_rand(0,$max)];
        return $key;
    }
    function enviarCodigo($email){
        global $db;
        if (validemail($email)){
            $codigo = generarCodigo();
            $sql = "INSERT INTO verificaciones VALUES ('$email','$codigo')
                    ON DUPLICATE KEY UPDATE code='$codigo'";
            $db->query($sql);
            if($db->error=="")
                echo sendMail(
                    $email,
                    "Codigo de verificación",
                    "<h5>Su código de verificación es:</h5>
                    <h2 style=\"color:#007bff\">$codigo</h2>
                    <h6>Si no solicito esto, descarte este mensaje</h6>"
                );
            else return $db->error;
        } else return 'email invalido';
    }
    function verificarCodigo($codigo, $email){
        global $db;
        if(validcode($codigo) && validemail($email)){
            $sql = "SELECT code FROM verificaciones WHERE email='$email'";
            $res = $db->query($sql);
            if($db->error==""){
                $res = $res->fetch_object();
                if($res->code == $codigo){
                    $db->query("DELETE FROM verificaciones WHERE email='$email'");
                    return 'true';
                }    
            }
        }
        return 'false';
    }
?>