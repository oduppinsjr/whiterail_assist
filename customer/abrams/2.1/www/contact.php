<?php 
//Sample SendGrid code can be found here: https://github.com/sendgrid/sendgrid-php

// Uncomment the next line if you're using a dependency loader (such as Composer) (recommended)
require __DIR__ . '/../vendor/autoload.php';

// Uncomment the next line if you're not using a dependency loader (such as Composer), replacing <PATH TO> with the path to the sendgrid-php.php file
//require_once 'lib/sendgrid-php/SendGrid.php';

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
		if ( empty($ctt_department) OR empty($ctt_name) OR empty($ctt_number) OR empty($ctt_message) ) {
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
		function num_only($num){
			return preg_replace("/[^0-9,.]/", "", $num);
		}

		// Set the recipient email address.
		if ($ctt_name == "odell test") {
			$recipient = "odell@whiterailreviews.com";
			$admin_email = "";
		}
		else {
			$recipient = "dispatch@abrams.ca";
		}

		// Set the email subject.
		$subject = "New $ctt_department Request from $ctt_name";

		// Build the email content.
		$email_content = "Attention Dispatch!<br/><br/>";
		$email_content .= "The following tow request has been submitted via Whiterail Assist. Please follow up with the customer for more information.<br/><br/>";
		$email_content .= "
		<table style='border: 1px solid black;border-collapse:collapse;text-align:center;'>
			<tbody>
				<tr>
					<th style='border: 1px solid black;border-collapse:collapse;text-align:center;'>Name</th>
					<th style='border: 1px solid black;border-collapse:collapse;text-align:center;'>Phone</th>
					<th style='border: 1px solid black;border-collapse:collapse;text-align:center;'>Service</th>
					<th style='border: 1px solid black;border-collapse:collapse;text-align:center;'>Message</th>
				</tr>
				<tr>
					<td style='border: 1px solid black;border-collapse:collapse;text-align:center;'>$ctt_name</td>
					<td style='border: 1px solid black;border-collapse:collapse;text-align:center;'>$ctt_number</td>
					<td style='border: 1px solid black;border-collapse:collapse;text-align:center;'>$ctt_department</td>
					<td style='border: 1px solid black;border-collapse:collapse;text-align:center;'>$ctt_message</td>
				</tr>
			</tbody>
		</table>";

		// make a secure connection to SendGrid
		$email = new \SendGrid\Mail\Mail();
		$email->setFrom($from_email, "Whiterail Assist");
		$email->setSubject($subject);
		$email->addTo($recipient);
		$email->addContent("text/html", $email_content);
		$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
		try {
			$response = $sendgrid->send($email);
			//print $response->statusCode() . "\n";
			//print_r($response->headers());
			//print $response->body() . "\n";
				$message = "Message sent successfully!";
				$status = ' success';
				$to = '';
				$subject = '';
				$content = '';
		} catch (Exception $e) {
			echo 'Caught exception: '. $e->getMessage() ."\n";
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
