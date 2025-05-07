<?php
    require 'PHPMailer.php';
    require 'SMTP.php';
    require 'Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    try {
        // Server settings (mailtrap.io)
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'e698d0d2ec9a82';
        $mail->Password = 'd8f8aac0d96168';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        // Recipients
        $mail->setFrom('test@uzzal.com', 'Uzzal Hossen');
        $mail->addAddress('sent@email.com');
        $mail->addReplyTo('test@uzzal.com');
        $mail->addCC('cc@email.com');
        $mail->addBCC('bcc@email.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Test Email Subject';
        $mail->Body = 'This is a test email sent from PHPMailer!';
        $mail->addAttachment('uploads/ship.jpg', 'ship_img.jpg');

        $mail->send();
        echo 'Email has been sent successfully!';

    } catch(Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>