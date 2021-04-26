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
        <div class="main-widget-box">
            <div class="slt-box">
                <div class="tp-header">
                    <div class="tp-header-text">
                        <p>Who would you like to text?</p>
                    </div>
                    <div class="tp-close-btn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="slt-body">
                    <button class="slt-btn ctt-btn">Car & Truck Towing</button>
                    <button class="slt-btn hdt-btn">Heavy Duty Towing</button>
                    <button class="slt-btn ra-btn">Roadside Assistance</button>
                </div>
                <div class="footer">
                    <!--<p class="ftr_t">Powered By <a href="https://whiterailreviews.com" target="_blank"><img alt="Whiterail" width="100" height="16" src="images/logo.png"></a></p>-->
				</div>
            </div>
            <div class="Car-Truck-Towing">
                <div class="tp-header">
                    <div class="tp-header-text">
                        <p>Car & Truck Towing</p>
                    </div>
                    <div class="tp-close-btn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="form-body">
                    <form id="ctt_form" action="contact.php" method="POST">
                        <span id="ctt-name-error"></span>
                        <input type="text" id="ctt-name" name="ctt-name" class="input-box" placeholder="Name">
                        <span id="ctt-number-error"></span>
                        <input type="test" id="ctt-number" name="ctt-number" class="input-box" placeholder="Mobile Number">
                        <span id="ctt-message-error"></span>
                        <textarea rows="1" id="ctt-message" name="ctt-message" class="input-box" placeholder="Message"></textarea>
                        <div class="form-message"></div>
                        <div class="action-btn-box">
                            <span class="back-btn slt-btn">BACK</span>
							<div class="send-action">
								<img src="https://www.vintage-hostel.com/wp-content/uploads/2017/01/loading5.gif" alt="" class="loder"/>
								<input type="submit" name="ctt-submit" class="btn-Submit" id="ctt-submit-btn" value="SEND"/>
							</div>
                        </div>
                    </form>
                </div>
                <div class="footer">
                    <!--<p class="ftr_t">Powered By <a href="https://whiterailreviews.com" target="_blank"><img alt="Whiterail" width="100" height="16" src="images/logo.png"></a></p>-->
                </div>
            </div>
            <div class="Heavy-Duty-Towing">
                <div class="tp-header">
                    <div class="tp-header-text">
                        <p>Heavy Duty Towing</p>
                    </div>
                    <div class="tp-close-btn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="form-body">
                    <form id="hdt_form" action="contact.php" method="POST">
                        <span id="hdt-name-error"></span>
                        <input type="text" id="hdt-name" name="hdt-name" class="input-box" placeholder="Name">
                        <span id="hdt-number-error"></span>
                        <input type="test" id="hdt-number" name="hdt-number" class="input-box" placeholder="Mobile Number">
                        <span id="hdt-message-error"></span>
                        <textarea rows="1" id="hdt-message" name="hdt-message" class="input-box" placeholder="Message"></textarea>
                        <div class="form-message"></div>
                        <div class="action-btn-box">
                            <span class="back-btn slt-btn">BACK</span>
							<div class="send-action">
								<img src="https://www.vintage-hostel.com/wp-content/uploads/2017/01/loading5.gif" alt="" class="loder"/>
								<input type="submit" name="hdt-submit" class="btn-Submit" id="hdt-submit-btn" value="SEND" />
							</div>
                        </div>
                    </form>
                </div>
                <div class="footer">
                    <!--<p class="ftr_t">Powered By <a href="https://whiterailreviews.com" target="_blank"><img alt="Whiterail" width="100" height="16" src="images/logo.png"></a></p>-->
                </div>
            </div>
            <div class="Roadside-Assistance">
                <div class="tp-header">
                    <div class="tp-header-text">
                        <p>Roadside Assistance</p>
                    </div>
                    <div class="tp-close-btn">
                        <i class="fas fa-times close"></i>
                    </div>
                </div>
                <div class="form-body">
                    <form id="ra_form" action="contact.php" method="POST">
                        <span id="ra-name-error"></span>
                        <input type="text" id="ra-name" name="ra-name" class="input-box" placeholder="Name">
                        <span id="ra-number-error"></span>
                        <input type="test" id="ra-number" name="ra-number" class="input-box" placeholder="Mobile Number">
                        <span id="ra-message-error"></span>
                        <textarea rows="1" id="ra-message" name="ra-message" class="input-box" placeholder="Message"></textarea>
                        <div class="form-message"></div>
                        <div class="action-btn-box">
                            <span class="back-btn slt-btn">BACK</span>
							<div class="send-action">
								<img src="https://www.vintage-hostel.com/wp-content/uploads/2017/01/loading5.gif" alt="" class="loder"/>
								<input type="submit" name="ra-submit" class="btn-Submit" id="ra-submit-btn" value="SEND" />
							</div>
                        </div>
                    </form>
                </div>
                <div class="footer">
					<!--<p class="ftr_t">Powered By <a href="https://whiterailreviews.com" target="_blank"><img alt="Whiterail" width="100" height="16" src="images/logo.png"></a></p>-->
				</div>
            </div>
        </div>
        <div class="act-widget-box">
            <div class="act-widget-btnText"><i class="fas fa-comment-alt"></i>Text Dispatch</div>
            <div class="act-widget-btnclose"><i class="far fa-times-circle"></i>Close</div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/apps.ajax.js"></script>
    <script src="js/apps.js"></script>
</body>
</html>