<?php 
//Sample SendGrid code can be found here: https://github.com/sendgrid/google-php-sample-app

require_once 'lib/sendgrid-google-php/SendGrid_loader.php';

// <sendgrid_username>,<sendgrid_password> should be replaced with the SendGrid credentials
$sendgrid_username = 'odellduppins';
$sendgrid_password = 'XqELUbG&es$z4UuN';
$api_key = "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";
$from_email = "noreply@whiterailreviews.com";
$admin_email = "odell@whiterailreviews.com";

if(isset($_POST["ctt-name"])){
		// Only process POST reqeusts.
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Get the form fields and remove whitespace.
		$ctt_department = strip_tags($_POST["ctt-department"]);
		$ctt_name = strip_tags($_POST["ctt-name"]);
		$ctt_number = strip_tags($_POST["ctt-number"]);
		$ctt_message = strip_tags($_POST["ctt-message"]);
		
		// Check that data was sent to the mailer.
		if ( empty ($ctt_department) OR empty($ctt_name) OR empty($ctt_number) OR empty($ctt_message) ) {
			// Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo "Please complete the form and try again.";
			exit;
		}
		
		function val_input($data) {
			$data = strip_tags($data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		// Fix phone number
		function num_only($num){
			return preg_replace("/[^0-9,.]/", "", $num);
		}

		// Remove URL's from entries
		// remove_url($ctt_department);
		// remove_url($ctt_name);
		// remove_url($ctt_number);
		// remove_url($ctt_message);
		// function remove_url($data) {
		// 	$regex = '\b(https?|ftp|file)://[-A-Z0-9+&@#/%?=~_|!:,.;]*[-A-Z0-9+&@#/%=~_|]';
		// 	preg_match_all($regex, $data, $url);
		// 	if (empty($url)) {
		// 		// Set a 400 (bad request) response code and exit.
		// 		http_response_code(400);
		// 		echo "Please remove URL and try again: $url";
		// 		exit;
		// 	}
		// }

		// Set the recipient email address.
		if ($ctt_name == "odell test") {
			$recipient = "odell@whiterailreviews.com";
		}
		else {
			$recipient = "dispatch@roadrunnerwreckerservice.com";
		}

		// Set the email subject.
		$subject = "New $ctt_department Request from $ctt_name";

		// Build the email content.
		$email_content = "Service: $ctt_department\n";
		$email_content .= "Name: $ctt_name\n";
		$email_content .= "Number: $ctt_number\n";
		$email_content .= "Message: $ctt_message\n";

		// make a secure connection to SendGrid
		$sendgrid = new SendGrid\SendGrid($sendgrid_username, $sendgrid_password);
		//$sendgrid = new SendGrid($api_key);
		$email     = new SendGrid\Mail();

		$email->addTo($recipient)->
			addBcc($admin_email)->
			setFrom($from_email)->
			setSubject($subject)->
			setText($email_content);

		# use the Web API to send your message
		$response = json_decode($sendgrid->send($email));

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
	}else {
	  // Not a POST request, set a 403 (forbidden) response code.
	  http_response_code(403);
	  echo "There was a problem with your submission, please try again.";
	}
	sleep(3);
?>
