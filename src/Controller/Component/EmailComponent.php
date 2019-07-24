<?php
namespace App\Controller\Component;
use Cake\Controller\Component;
use Cake\Core\App;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require ROOT. '/vendor/phpmailer/phpmailer/src/Exception.php';
require ROOT. '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require ROOT. '/vendor/phpmailer/phpmailer/src/SMTP.php';
class EmailComponent extends Component {
    public function send_mail($to, $subject, $message)
    {
        // date_default_timezone_set('Asia/Calcutta');
        $sender = "ritwika.navsoft@gmail.com"; // this will be overwritten by GMail
        $header = "X-Mailer: PHP/".phpversion() . "Return-Path: $sender";
        $mail = new PHPMailer();
        $mail->SMTPDebug  = 2; // turn it off in production
        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com"; 
        $mail->SMTPAuth = true;
        $mail->Username   = "ritwika.navsoft@gmail.com";  
        $mail->Password   = "ritwika123";
        $mail->SMTPSecure = "tls"; // ssl and tls
        $mail->Port = 587; // 465 and 587
        $mail->SMTPOptions = array (
            'tls' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ),
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
            
        $mail->From = $sender;
        $mail->FromName = $sender;
        $mail->AddAddress($to);
        $mail->IsHTML(true);
        $mail->CreateHeader($header);
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);
        $mail->AltBody = nl2br($message);
        // return an array with two keys: error & message
        if(!$mail->Send()) {
            return array('error' => true, 'message' => 'Mailer Error: ' . $mail->ErrorInfo);
        } else {
            return array('error' => false, 'message' =>  "Message sent!");
        }
   }
}