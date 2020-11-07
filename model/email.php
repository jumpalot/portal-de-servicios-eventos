<?php
    function sendMail($destinatario,$asunto,$cuerpo){
        mail(
            $destinatario,
            $asunto,
            $cuerpo,
            'MIME-Version: 1.0' . "\r\n".
            'Content-type: text/html; charset=iso-8859-1' . "\r\n".
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
        $codigo = generarCodigo();
        $sql = "INSERT INTO verificaciones VALUES ('$email','$codigo')
                ON DUPLICATE KEY UPDATE code='$codigo'";
        $db->query($sql);
        if($db->error=="")
            sendMail(
                $email,
                "Codigo de verificación",
                "<h5>Su código de verificación es:</h5>
                <h2 style=\"color:#007bff\">$codigo</h2>
                <h6>Si no solicito esto, descarte este mensaje</h6>"
            );
    }
    function verificarCodigo($codigo, $email){
        global $db;
        $sql = "SELECT code FROM verificaciones WHERE email='$email'";
        if($db->query($sql)->fetch_object()->code == $codigo){
            $db->query("DELETE FROM verificaciones WHERE email='$email'");
            return 'true';
        } return 'false';
    }
?>