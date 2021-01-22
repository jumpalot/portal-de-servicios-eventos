<?php
    require_once('../../vendor/autoload.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    function sendMail($destinatario,$asunto,$cuerpo){
        $mailer = new PHPMailer(true);
        try {
            // Configure PHPMailer
            $mailer->isSMTP();
            $mailer->SMTPAuth = true;
            $mailer->SMTPSecure='STARTTLS';
            $mailer->Port = 587;

            // Configure SMTP Server
            $mailer->Host = 'smtp.office365.com';
            $mailer->Username = 'portalservicioseventos@outlook.com';
            $mailer->Password = file_get_contents('../contra.txt');

            // Configure Email
            $mailer->setFrom('portalservicioseventos@outlook.com', 'El Portal de Eventos');
            $mailer->addAddress($destinatario);
            $mailer->Subject = $asunto;
            $mailer->Body = $cuerpo;
            $mailer->isHTML(true);
            $mailer->CharSet = 'UTF-8';

            // send mail
            $mailer->Send();
            return "";
        } catch (Exception $e) {
            return 'Mailer Error: ' . $mailer->ErrorInfo;
        }
        return "fallo desconocido";
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
        return '';
    }
    function verificarCodigo($codigo, $email){
        global $db;
        $codigo=strtoupper($codigo);
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