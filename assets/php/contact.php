<?php

if(isset($_POST['message'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to      = 'oscar.rpr@gmail.com';
	$subject = 'Portfolio Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
		$res['message'] = "Email sent. I'll answer you as soon as possible. Thanks for contact me.";
    }
	else{
		$res['message'] = 'Failed to send mail. Please mail me to oscar.rpr@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>