<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

    class Mailer {
        public function sendMail(Mail $mail) {
            //TODO: Parsing mail data to procede to send
            $to = $mail->getEmail();
            $subject = "Desde MailSender de Wysper, Para: " . $mail->getNombre();
            $destName = $mail->getNombre();
            $message = $mail->getMsg();

            
            self::mail($to, $destName, $subject, $message);
        }

        private static function mail(string $to, string $name, string $subject, string $msg): void {
            $mail = new PHPMailer(true); //--> pasar true activa las excepciones
            $env = require(__DIR__ . '../../../mailer-conf.php');

            $host = $env['SMTP_HOST'];
            $user = $env['SMTP_USER'];
            $pass = $env['SMTP_PASS'];
            $port = $env['SMTP_PORT'] ?: 587;
            $secure = $env['SMTP_SECURE'] ?: 'tls';

            // Setear todo el server smtp
            $mail->isSMTP();
            $mail->Host       = $host;
            $mail->SMTPAuth   = true;
            $mail->Username   = $user;
            $mail->Password   = $pass;
            $mail->SMTPSecure = $secure;
            $mail->Port       = $port;

            // Mail
            $mail->setFrom($user, 'MailSender Wysper');
            $mail->addAddress($to, $name);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $msg;
            $mail->send();
        }
    }
?>