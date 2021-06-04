<?php 
	
		
		$email_to = "paramitasengupta83@gmail.com";
		
		$email_subject = $_POST['title']; // required
	
		$name = $_POST['name']; // required
		
		$email_from = $_POST['email']; // required

		$mobile = $_POST['mobile']; // required
		
		/*$cc = "shyam.sunder@sparxtechnologies.com";*/
		
		$message = $_POST['message']; // required
		
		// Form Message begin
		
		$email_message = "<table border='0' cellpadding='2' cellspacing='2' width='600'>
		<tr><td>Form details below:</td></tr>
		<tr><td>Name: ".$name." </td></tr>
		<tr><td>Email: ".$email_from."</td></tr>
		<tr><td>Mobile Number: ".$mobile."</td></tr>
		<tr><td>Subject: ".$email_subject."</td></tr>
		<tr><td>Message: ".$message."</td></tr>
		</table>";	
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		// Additional headers
		$headers .= 'Reply-To: '.$email_to."\r\n";
		$headers .= 'From: '.$name . "\r\n";
		$headers .= 'X-Mailer: PHP/' . phpversion();

		
	// Send Mail
		
		$send_contact=mail($email_to, $email_subject, $email_message, $headers);
	
	if($send_contact){
	echo '<script>window.location.href="contact.php?add";</script>';
	}
	else {
	echo '<script>window.location.href=contact.php?fail";</script>';
	}
?>
