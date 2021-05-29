<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'vinodclinic@gmail.com';          // SMTP username
$mail->Password = 'vinodclinic'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to
$to=$_POST["mto"];
$mail->setFrom($_POST["mfrom"], 'Vinod clinic');
$mail->addReplyTo($_POST["mfrom"], 'Vinod clinic');
$mail->addAddress($to);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = $_POST['msg'];

$mail->Subject = $_POST["subject"];
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
	?>
    <script>
    window.location="adminhome.php";
    </script>
    <?php
}
?>