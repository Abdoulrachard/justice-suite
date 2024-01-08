<?php
require_once '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];
    $message = $_POST['message'];
    
    $destinataire = "contact@cabinet-xaviertermeau.com";
    $subject = "Nouveau message depuis le formulaire de contact";
    
    $messageBody = "Nom: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Téléphone: $tel\n";
    $messageBody .= "Message:\n$message";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi d'email avec PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'contact@cabinet-xaviertermeau.com'; // Remplacez par votre adresse email Gmail
    $mail->Password = 'Rachardgeek_009'; // Remplacez par le mot de passe de votre compte Gmail

    $mail->isHTML(false);
    $mail->CharSet = "UTF-8";
    $mail->Encoding = 'base64';
    $mail->addAddress($destinataire);
    $mail->setFrom($email);
    $mail->addReplyTo($email);
    $mail->Subject = $subject;
    $mail->Body = $messageBody;

    try {
        $mail->send();
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Message envoyé !",
                text: "Votre message a été envoyé avec succès."
            })
        </script>';
    } catch (Exception $e) {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erreur d\'envoi",
                text: "Une erreur s\'est produite lors de l\'envoi du message."
            })
        </script>';
    }
}

?>
