

<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}



	// // Contact
	// $to = 'bmarsha72@gmail.com';
	// $subject = 'Subject here...';
	//
	// if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])){
	// 	$name    = $_POST['c_name'];
	// 	$from    = $_POST['c_email'];
	// 	$message = $_POST['c_message'];
	//
	// 	if (mail($to, $subject, $message, $from)) {
	// 		$result = array(
	// 			'message' => 'Thanks for contacting us!',
	// 			'sendstatus' => 1
	// 			);
	// 		echo json_encode($result);
	// 	} else {
	// 		$result = array(
	// 			'message' => 'Sorry, something is wrong',
	// 			'sendstatus' => 1
	// 			);
	// 		echo json_encode($result);
	// 	}
	// }

?>
