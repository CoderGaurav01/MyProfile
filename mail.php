<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port= 587;
$mail->SMTPAuth=true;
$mail->Username='*****************@gmail.com';
$mail->Password='*************';
$mail->SMTPSecure='tls';
$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->addAddress("****************@gmail.com", "Gaurav Chhapliyal");
$mail->isHTML(true);

$mail->Subject = $_POST["subject"];
$mail->Body = "<i>".$_POST['message']."</i>";
$mail->AltBody =$_POST['message'];
try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>