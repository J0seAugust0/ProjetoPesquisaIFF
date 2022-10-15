<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


if(empty($_POST['email'])){
	echo "<script>alert('Você precisa preencher todos os campos');
            location.href='sistema de cadastro.php';
            </script>";
	}
    else
    {
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'projetoiffvirtuallab@gmail.com';                     //SMTP username
    $mail->Password   = 'uyfwlszbuellcccz';                               //SMTP password  OBS: tem que ativar a verificação de duas etapas
    $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //Recipients
    $mail->setFrom('projetoiffvirtuallab@gmail.com', 'VSPLab');
    $mail->addAddress($_POST['email'], 'User');     //Add a recipient


    $link = '127.0.0.1/Teste6/confirma.php?h=';
    $token = 1;
    $mensagem = '<a href="'.$link.$token.'"> <b>Clique no aqui abaixo para confirmar.</b> </a>';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Confirme seu cadastro';
    $mail->Body    = $mensagem;
    $mail->AltBody = $mensagem;

    $mail->send();
    //echo 'Message has been sent';
    echo "<script>alert('Mensagem enviada.'); location.href='index.php'; </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}