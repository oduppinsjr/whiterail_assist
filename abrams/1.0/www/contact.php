<?php 
//Sample SendGrid code can be found here: https://github.com/sendgrid/google-php-sample-app

require_once 'lib/sendgrid-google-php/SendGrid_loader.php';

// <sendgrid_username>,<sendgrid_password> should be replaced with the SendGrid credentials
$sendgrid_username = 'odellduppins';
$sendgrid_password = 'XqELUbG&es$z4UuN';
$from_email = "noreply@whiterailreviews.com";
$admin_email = "odell@whiterailreviews.com";

if(isset($_POST["ctt-name"])){
		// Only process POST reqeusts.
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Get the form fields and remove whitespace.
		$ctt_name = strip_tags($_POST["ctt-name"]);
		$ctt_number = strip_tags($_POST["ctt-number"]);
		$ctt_message = strip_tags($_POST["ctt-message"]);
		
		// Check that data was sent to the mailer.
		if ( empty($ctt_name) OR empty($ctt_number) OR empty($ctt_message) ) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Please complete the form and try again.";
			exit;
		}
		
		function val_input($data) {
			$data= strip_tags($data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		function num_only($num){
			return preg_replace("/[^0-9,.]/", "", $num);
		}

		// Set the recipient email address.
		$recipient = "dispatch@abrams.ca";

		// Set the email subject.
		$subject = "New Tow Request from $ctt_name";

		// Build the email content.
		$email_content = "Services: Car & Truck Towing\n";
		$email_content .= "Name: $ctt_name\n";
		$email_content .= "Number: $ctt_number\n";
		$email_content .= "Message: $ctt_message\n";

		// make a secure connection to SendGrid
		$sendgrid = new SendGrid\SendGrid($sendgrid_username, $sendgrid_password);
		$mail     = new SendGrid\Mail();

		$mail->addTo($recipient)->
			addBcc($admin_email)->
			setFrom($from_email)->
			setSubject($subject)->
			setText($email_content);

		# use the Web API to send your message
		$response = json_decode($sendgrid->send($mail));

		# check request response
		if ($response->message == 'success')
		{
			$message = "Message sent successfully!";
			$status = ' success';
			$to = '';
			$subject = '';
			$content = '';
		}
		else
		{
			$message = "Message not sent - " . $response->errors[0];
			$status = ' error';
		}
		}
		echo $message;
	}elseif(isset($_POST["hdt-name"])){
	   	// Only process POST reqeusts.
	   	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Get the form fields and remove whitespace.
		$hdt_name = strip_tags($_POST["hdt-name"]);
		$hdt_number = strip_tags($_POST["hdt-number"]);
		$hdt_message = strip_tags($_POST["hdt-message"]);

		// Set the recipient email address.
		$recipient = "dispatch@abrams.ca";

		// Check that data was sent to the mailer.
		if ( empty($hdt_name) OR empty($hdt_number) OR empty($hdt_message) ) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Please complete the form and try again.";
			exit;
		}
		
		function val_input($data) {
			$data= strip_tags($data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		function num_only($num){
			return preg_replace("/[^0-9,.]/", "", $num);
		}

		// Set the email subject.
		$subject = "New Heavy Duty Towing Request from $hdt_name";

		// Build the email content.
		$email_content = "Services: Heavy Duty Towing\n";
		$email_content .= "Name: $hdt_name\n";
		$email_content .= "Number: $hdt_number\n";
		$email_content .= "Message: $hdt_message\n";

		// make a secure connection to SendGrid
		$sendgrid = new SendGrid\SendGrid($sendgrid_username, $sendgrid_password);
		$mail     = new SendGrid\Mail();

		$mail->addTo($recipient)->
			addBcc($admin_email)->
			setFrom($from_email)->
			setSubject($subject)->
			setText($email_content);

		# use the Web API to send your message
		$response = json_decode($sendgrid->send($mail));

		# check request response
		if ($response->message == 'success')
		{
			$message = "Message sent successfully!";
			$status = ' success';
			$to = '';
			$subject = '';
			$content = '';
		}
		else
		{
			$message = "Message not sent - " . $response->errors[0];
			$status = ' error';
		}
		}
		echo $message;
	}elseif(isset($_POST["ra-name"])){
		// Only process POST reqeusts.
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Get the form fields and remove whitespace.
		$ra_name = strip_tags($_POST["ra-name"]);
		$ra_number = strip_tags($_POST["ra-number"]);
		$ra_message = strip_tags($_POST["ra-message"]);

		// Set the recipient email address.
		$recipient = "dispatch@abrams.ca";

		// Check that data was sent to the mailer.

		if ( empty($ra_name) OR empty($ra_number) OR empty($ra_message) ) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Please complete the form and try again.";
			exit;
		}
		
		function val_input($data) {
			$data= strip_tags($data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		function num_only($num){
			return preg_replace("/[^0-9,.]/", "", $num);
		}

		// Set the email subject.
		$subject = "New Roadside Assistance Request from $ra_name";

		// Build the email content.
		$email_content = "Services: Roadside Assistance\n";
		$email_content .= "Name: $ra_name\n";
		$email_content .= "Number: $ra_number\n";
		$email_content .= "Message: $ra_message\n";

		// make a secure connection to SendGrid
		$sendgrid = new SendGrid\SendGrid($sendgrid_username, $sendgrid_password);
		$mail     = new SendGrid\Mail();

		$mail->addTo($recipient)->
			addBcc($admin_email)->
			setFrom($from_email)->
			setSubject($subject)->
			setText($email_content);

		# use the Web API to send your message
		$response = json_decode($sendgrid->send($mail));

		# check request response
		if ($response->message == 'success')
		{
			$message = "Message sent successfully";
			$status = ' success';
			$to = '';
			$subject = '';
			$content = '';
		}
		else
		{
			$message = "Message not sent - " . $response->errors[0];
			$status = ' error';
		}
		}
		echo $message;
	}else {
	  // Not a POST request, set a 403 (forbidden) response code.
	  http_response_code(403);
	  echo "There was a problem with your submission, please try again.";
	}
	sleep(3);
?>
