<?php
date_default_timezone_set('Asia/Kolkata');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "PHPMailer/PHPMailer.php";
require "PHPMailer/Exception.php";
require "PHPMailer/SMTP.php";   

class mail{

 
 
    public function sendmail($name, $email,  $subject, $message){
       
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $date = date('d/m/Y');
            // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'support@aaruconsultancy.com';                 // SMTP username
            $mail->Password = 'UdaipurAARU';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('support@aaruconsultancy.com', 'AARU Consultancy Support');
            $mail->addAddress('support@aaruconsultancy.com');     // Add a recipient
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Mail From Website Contact Form';
            $mail->Body    = '<h2>This mail is generated from Contact form of website:</h2><br><h3>Date: '.$date.'<br><br>Name: '.$name.'<br><br>Email ID: '.$email.'<br><br>Subject: '.$subject.'<br><br>Message: '.$message.'</h3>';

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}