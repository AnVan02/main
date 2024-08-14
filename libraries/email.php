<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// //require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

//composer require phpmailer/phpmailer 

function send_mail($sent_to_email, $sent_to_fullname, $subject, $content, $option = array())
{
    global $config;
    $config_email = $config['email'];
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = $config_email['smtp_host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $config_email['smtp_user'];
        $mail->Password   = $config_email['smtp_pass'];
        $mail->SMTPSecure = $config_email['smtp_secure'];
        $mail->Port       = $config_email['smtp_port'];
        $mail->CharSet = 'UTF-8';

        $mail->setFrom($config_email['smtp_user'], $config_email['smtp_fullname']);
        $mail->addAddress($sent_to_email, $sent_to_fullname);
        // $mail->addAddress('ellen@example.com');     
        // $mail->addAddress('ellen@example.com');         
        $mail->addReplyTo($config_email['smtp_user'], $config_email['smtp_fullname']);
        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $content;
        $mail->AltBody = $altbody;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Email không được gửi: Chi tiết lỗi: {$mail->ErrorInfo}";
    }
}
