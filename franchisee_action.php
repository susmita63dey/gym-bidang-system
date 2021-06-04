<?php 
	
		
		$email_to = "paramitasengupta83@gmail.com";
		
	
		$name = $_POST['name']; // required
		
		$email_from = $_POST['email']; // required

		$mobile = $_POST['mobile']; // required

		$title = $_POST['title']; // required
		
		$message = $_POST['message']; // required
		
		// Form Message begin
		
		$email_message = "
		Form details below:
		Name: $name
		Email: $email_from
		Mobile Number: $mobile
		Subject: $title
		Message: $message";
		
		$headers  = "Enquiry from Franchisee Page";

		
	// Send Mail
		
		$send_contact=mail($email_to, $title, $email_message, $headers);
	
	if($send_contact){
	echo '<script>window.location.href="franchisee.php?Success";</script>';
	}
	else {
	echo '<script>window.location.href=franchisee.php?fail";</script>';
	}
?>
