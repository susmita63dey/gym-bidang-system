<?php 
	
		
		$email_to = "c.bhabajeet@gmail.com";
		
	
		$name = $_POST['name']; // required
		
		$email_from = $_POST['email']; // required

		$mobile = $_POST['mobile']; // required
		
		$message = $_POST['message']; // required
		
		// Form Message begin
		
		$email_message = "
		Form details below:
		Name: $name
		Email: $email_from
		Mobile Number: $mobile
		Message: $message";
		
		$headers  = "Enquiry from Career Page";

		
	// Send Mail
		
		$send_contact=mail($email_to, $email_subject, $email_message, $headers);
	
	if($send_contact){
	echo '<script>window.location.href="career.php?Success";</script>';
	}
	else {
	echo '<script>window.location.href=career.php?fail";</script>';
	}
?>
