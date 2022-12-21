<?php


namespace core\classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


/* ======= Enviar-Email ======= */
class EnviarEmail {

    /*==============================================================*/
    public function enviar_email_confirmacao_novo_cliente($email_cliente, $purl){

        //Envia um email para o novo cliente no sentido de confirmar o email
        
        //constroi o purl (link para validação do email)
        $purl = 'https://www.minhaloja.com.br/?a=confirmar_email&purl=' . $purl;

        $mail = new PHPMailer(true);

        try {
        //Opções do servidor
        $mail->SMTPDebug = SMTP:: DEBUG_OFF; //DEBUG_SERVER;         
        $mail->isSMTP();                                            
        $mail->Host       = EMAIL_HOST;              
        $mail->SMTPAuth   = true;         
        $mail->Username   = EMAIL_FROM;
        $mail->Password   = EMAIL_PASS; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = EMAIL_PORT; 

        //Emissor e receptor
        $mail->setFrom(EMAIL_FROM, APP_NAME);
        $mail->addAddress($email_cliente); 

        //Assunto
        $mail->isHTML(true);                        
        $mail->Subject =  APP_NAME .' - Confirmação de email';

        //Mensagem
        $html = '<p>Seja bem-vindo a nossa loja ' . APP_NAME . '.</p>';
        $html = '<p>Para poder entrar na nossa loja, necessita confirmar o seu email!</p>';
        $html = '<p>Para confirmar o email, click no link abaixo:</p>';
        $html = '<p><a href="#">Confirmar Email</a></p>';


        $mail->Body = $html;

        $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }











    /*==============================================================*/
}













?>