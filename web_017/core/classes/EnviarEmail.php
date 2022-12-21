<?php


namespace core\classes;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/* ======= Enviar-Email ======= */
class EnviarEmail {

    /*==============================================================*/
    public function enviar_email_confirmacao_novo_cliente(){

        //Load Composer's autoloader
        //require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
        //Server settings
        $mail->SMTPDebug = SMTP:: DEBUG_OFF; //DEBUG_SERVER;         
        $mail->isSMTP();                                            
        $mail->Host       = EMAIL_HOST;              
        $mail->SMTPAuth   = true;         
        $mail->Username   = EMAIL_FROM;
        $mail->Password   = EMAIL_PASS; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = EMAIL_PORT; 

        //Recipients
        $mail->setFrom(EMAIL_FROM, APP_NAME);
        $mail->addAddress('sapupaaa@gmail.com'); 


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'PHPStore - teste';
        $mail->Body = 'Mensagem de teste <strong>BOLD!!</strong>!!';

        $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }











    /*==============================================================*/
}













?>