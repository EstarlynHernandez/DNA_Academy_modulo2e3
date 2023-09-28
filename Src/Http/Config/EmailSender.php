<?php

namespace php\Http\Config;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender
{
    public static function send($to, $message, $subject = 'From mail'): void
    {
        $email = new PHPMailer();
        try {
            $email->isSMTP();
            $email->Host = "imap.gmail.com";
            $email->SMTPAuth = true;
            $email->Username = '';
            $email->Password = "";
            $email->SMTPSecure = 'ssl';
            $email->Port = 465;

            $email->setFrom('', "");
            $email->addAddress($to, $to);
            $email->isHTML();
            $email->Subject = $subject;
            $email->Body = $message;

            $email->send();
        } catch (Exception $error) {
            echo 'Error ' . $email->ErrorInfo;
        }
        echo $email->ErrorInfo;
    }
}