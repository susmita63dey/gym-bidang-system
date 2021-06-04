<?php 
	
		
		$email_to = "paramitasengupta83@gmail.com";
		
		$email_subject = $_POST['title']; // required
	
		$name = $_POST['name']; // required
		
		$email_from = $_POST['email']; // required

		$mobile = $_POST['mobile']; // required
		
		/*$cc = "shyam.sunder@sparxtechnologies.com";*/
		
		$message = $_POST['message']; // required
		
		// Form Message begin
		
		$email_message = "
		Form details below:
		Name: $name
		Email: $email_from
		Mobile Number: $mobile
		Subject: $email_subject
		Message: $message";
		
		$headers  = "Enquiry from $name";

		
	// Send Mail
		
		$send_contact=mail($email_to, $email_subject, $email_message, $headers);
	
	if($send_contact){
	echo '<script>window.location.href="contact.php?Success";</script>';
	}
	else {
	echo '<script>window.location.href=contact.php?fail";</script>';
	}
?>
