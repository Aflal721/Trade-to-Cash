<?php session_start(); 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if (isset($_POST["btnSubmit"])) {





$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'mohammedaflal00@gmail.com'; // YOUR gmail
    $mail->Password   = 'iyna pzbm hthc hiew'; // App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Sender
    $mail->setFrom('mohammedaflal00@gmail.com', 'TrashToCash');

    // -------------------
    // Email to USER
    // -------------------
    $mail->addAddress('anosuriya@gmail.com');
    $mail->Subject = 'Advertisement Submitted Successfully';
    $mail->Body    = "Hi,\n\nYour advertisement titled has been submitted successfully.\n\nThank you!\nTrashToCash Team";
    $mail->send();

    // Clear previous recipients
    $mail->clearAddresses();

    // -------------------
    // Email to ADMIN
    // -------------------
    $mail->addAddress('mohammedaflal00@gmail.com');
    $mail->Subject = 'New Advertisement Submitted';
    $mail->Body    = "A new advertisement has been posted.\n\nTitle: $productname\nUser Email: $userEmail";
    $mail->send();

    echo "Emails sent successfully!";

} catch (Exception $e) {
    echo "Email Error: {$mail->ErrorInfo}";
}

}
?>