<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'admin/Phpmailer/src/Exception.php';
require 'admin/Phpmailer/src/PHPMailer.php';
require 'admin/Phpmailer/src/SMTP.php';

if(isset($_POST['send']))
{
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth =true;
	$mail->Username ='sampletest123998@gmail.com';
	$mail->Password ='cdzmxxdtphaiobkx';
	$mail->SMTPSecure ='ssl';
	$mail->Port = 465;

	$mail->setFrom('sampletest123998@gmail.com');
	$mail->addAddress($_POST['email']);
	$mail->isHTML('true');
	$mail->Subject = $_POST['subject'];
	$mail->Body = $_POST['message'];
	$mail->send();
	echo 
	"
	<script>
	alert('sent sucessfully');
	document.location.href='serviceupdate.php';
	</script>
	";

}
?>