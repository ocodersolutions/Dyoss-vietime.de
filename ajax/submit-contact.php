<?php
require '../admin/classes/defines.php';
require '../vendor/PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$body             = file_get_contents('../vendor/template-email-contact.html');
$body             = str_replace("[[name]]",$_POST['name'],$body);
$body             = str_replace("[[email]]",$_POST['email'],$body);
$body             = str_replace("[[nachricht]]",$_POST['nachricht'],$body);

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = MAIL_HOST;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = MAIL_USER;                 // SMTP username
$mail->Password = MAIL_PASS;                           // SMTP password
$mail->SMTPSecure = MAIL_SMTPSECURE;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(MAIL_FROMDISPLAY, 'Vietime');
$mail->addAddress(MAIL_TO, 'Vietime');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo(MAIL_FROMDISPLAY, 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('../vendor/images/galerie-ansicht7-vietime1.jpg');    
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contact from Vietime';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->MsgHTML($body);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>