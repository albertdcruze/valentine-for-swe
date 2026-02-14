<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';                       //gmail SMTP server set to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'oaksoe334@gmail.com';                     //SMTP username (your gmail account)
    $mail->Password   = 'xxos1001';                               //SMTP password (your gmail password or app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    //Recipients
    $mail->setFrom('oaksoe334@gmail.com', 'Mailer');
    $mail->addAddress('ryuzakibane@gmail.com', 'Joe User');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'I Love You';
    $mail->Body    = "Happy Valentine's Day to the most special person in my life. I want you to know that I have loved you from the very first moment, and I can't stand the thought of losing you day by day. You are the only person for me. Everything is broken now, and I never imagined it would be this way. I still miss you and I still love you. I just want you to be happy and to see you smile. Please remember me, even if Im not beside you anymore. I hope our memories never fade away. I love you, Swe. ❤";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
