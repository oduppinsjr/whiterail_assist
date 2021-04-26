<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whiterail Assist</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="main-widget">
        <div class="main-widget-box widget-box-modal">
            <div class="slt-box">
                <div class="tp-header">
                    <div class="tp-header-text">
                        <img alt="Whiterail" width="200" height="32" src="images/rr-logo.png">
                        <p>How may we assist you today?</p>
                    </div>
                    <div class="tp-close-btn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="form-body">
                    <form id="ctt_form" action="contact.php" method="POST">
                        <label for="ctt-department">Department:</label>
                        <select name="ctt-department" id="ctt-department">
                            <option value="Car & Truck Towing">Car & Truck Towing</option>
                            <option value="Heavy Duty Towing">Heavy Duty Towing</option>
                            <option value="Roadside Assistance">Roadside Assistance</option>
                            <option value="Other">Other</option>
                        </select>
                        <label for="ctt-name">Name:</label><span id="ctt-name-error"></span>
                        <input type="text" id="ctt-name" name="ctt-name" class="input-box">
                        <label for="ctt-number">Mobile:</label><span id="ctt-number-error"></span>
                        <input type="tel" id="ctt-number" name="ctt-number" class="input-box">
                        <label for="ctt-message">Message:</label><span id="ctt-message-error"></span>
                        <textarea rows="2" id="ctt-message" name="ctt-message" class="input-box"></textarea>
                        <div class="form-disclaimer">
                            <p>By clicking "Submit" I agree to receive emails, text messages, and phone calls, which may be recorded and/or sent using automated dialing or emailing equipment or software, from Roadrunner Wrecker Service and its affiliates and business partners in the future, unless I opt-out from such communications. I also agree to the Terms of Use and Privacy Policy linked below. I understand that my consent to be contacted is not a requirement to purchase any product or service and that I can opt-out at any time. I agree to pay my mobile service provider’s text messaging rates, if applicable.</p>
                        </div>
                        <div class="form-message"></div>
                        <div class="action-btn-box">
							<div class="send-action">
								<input type="submit" name="ctt-submit" class="btn-Submit" id="ctt-submit-btn" value="SUBMIT"/>
							</div>
                        </div>
                    </form>
                </div>
                <div class="footer">
                    <p class="ftr_t">Powered By <a href="https://whiterailreviews.com" target="_blank"><img alt="Whiterail" width="100" height="16" src="images/wr-logo.png"></a></p>
				</div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/apps.ajax.js"></script>
    <script src="js/apps.js"></script>
</body>
</html>