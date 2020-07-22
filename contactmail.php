<?php
require('vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;

$mail = htmlspecialchars($_POST['mail']);
$msg = htmlspecialchars($_POST['message']);
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;

if (isset($_POST)) {
    $mail->Host = 'SMTP.office365.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "memo.art@hotmail.fr";
    $mail->Password = "Memoart34";
    $mail->SMTPDebug  = 1;
    try {
//Set who the message is to be sent from
        $mail->setFrom('memo.art@hotmail.fr');
//Set an alternative reply-to address
        $mail->addReplyTo($_POST['mail'], $_POST['name']);
//Set who the message is to be sent to
        $mail->addAddress('memo.art@hotmail.fr');
//Set the subject line
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];
        $result = $mail->send();
        if (!$mail->send()) {
            echo 'Erreur, message non envoyé.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            header('Location: index.php');
        }
    } catch (Exception $e) {
    }
}
?>