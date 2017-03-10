<?php session_start(); ?>
<?php require_once("botdetect.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
		<link type="text/css" rel="Stylesheet" href="captcha/<?php echo CaptchaUrls::LayoutStylesheetUrl() ?>" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/auth_step.css">
	</head>
	<body>
		<!--ONE SECTION-->
		<div id="oneSec">
			<!--nav-->
			<?php  include("components/navbar.php") ?>
			<!--END nav-->
			<!-- page_bg_slideshow -->
			<div id="page_bg" class="item_center">
				<div id="slide_wrapper">
					<div><img src="image/page_bg_generated_v6b.jpg"></div>
					<div><img src="image/page_bg_generated_v6b_02.jpg"></div>
				</div>
			</div> 
			<!-- END page_bg_slideshow -->

			<!-- page content -->
			<div id="auth_step1" class="container">
					<div id="curent_steps" class="row">
						<div class="steps col s2 m2 l2 item_center"><div class="item_center paint_step">1</div></div>
						<div class="steps col s2 m2 l2 offset-s1 offset-m1 offset-l1 item_center"><div class="item_center">2</div></div>
						<div class="steps col s2 m2 l2 offset-s2 offset-m2 offset-l2 item_center"><div class="item_center">3</div></div>
						<div class="steps col s2 m2 l2 offset-s1 offset-m1 offset-l1 item_center"><div class="item_center">4</div></div>
					</div>

					<div id="captcha"><!-- section captcha -->
						<div class="text"><!-- explication -->
							<h3>Fill the field correctly</h3>
						</div><!-- END explication -->

						<div class="row"><!-- cap_field -->
							<div class="capt_field col l6 offset-l3">
								<div class="row">
									<div class="col s10 m10 l10">
<!-- ---------------------------------------------------------------- -->
										<form method="post" action="" class="column" id="form1">
												<label for="CaptchaCode">Retype the characters from the picture:</label>

												<?php // Adding BotDetect Captcha to the page
													$DemoCaptcha = new Captcha("DemoCaptcha");
													$DemoCaptcha->UserInputID = "CaptchaCode";

													if ($_POST && isset($_POST['ApplyCaptchaSettings'])) {
														if (isset($_POST['Locale'])) {
															$DemoCaptcha->Locale = $_POST['Locale'];
														}
														if (isset($_POST['CodeLength']) && 0 != strcmp($_POST['CodeLength'], 'default')) {
															$DemoCaptcha->CodeLength = $_POST['CodeLength'];
														} else {
															$DemoCaptcha->CodeLength = null;
														}
														if (isset($_POST['CodeStyle'])) {
															$DemoCaptcha->CodeStyle = $_POST['CodeStyle'];
														}
														if (isset($_POST['ImageStyle']) && 0 != strcmp($_POST['ImageStyle'], 'default')) {
															$DemoCaptcha->ImageStyle = $_POST['ImageStyle'];
														} else {
															$DemoCaptcha->ImageStyle = null;
														}
														if (isset($_POST['CustomLightColor'])) {
															$DemoCaptcha->CustomLightColor = $_POST['CustomLightColor'];
														}
														if (isset($_POST['CustomDarkColor'])) {
															$DemoCaptcha->CustomDarkColor = $_POST['CustomDarkColor'];
														}
														if (isset($_POST['ImageFormat'])) {
															$DemoCaptcha->ImageFormat = $_POST['ImageFormat'];
														}
														if (isset($_POST['ImageWidth'])) {
															$DemoCaptcha->ImageWidth = $_POST['ImageWidth'];
														}
														if (isset($_POST['ImageHeight'])) {
															$DemoCaptcha->ImageHeight = $_POST['ImageHeight'];
														}
														if (isset($_POST['SoundStyle']) && 0 != strcmp($_POST['SoundStyle'], 'default')) {
															$DemoCaptcha->SoundStyle = $_POST['SoundStyle'];
														} else {
															$DemoCaptcha->SoundStyle = null;
														}
														if (isset($_POST['SoundFormat'])) {
															$DemoCaptcha->SoundFormat = $_POST['SoundFormat'];
														}
													}

													echo $DemoCaptcha->Html(); ?>

												<div class="validationDiv">
													<input name="CaptchaCode" type="text" id="CaptchaCode" />
													<input type="submit" name="ValidateCaptchaButton" value="Validate" id="ValidateCaptchaButton" />

													<?php // Captcha user input validation (only if the form was sumbitted)
														if ($_POST && isset($_POST['ValidateCaptchaButton'])) {
															$isHuman = $DemoCaptcha->Validate();
															if (!$isHuman) {
																// Captcha validation failed, show error message
																echo "<span class=\"incorrect\">Incorrect code</span>";
															} else {
																// Captcha validation passed, perform protected action
																echo "<span class=\"correct\">Correct code</span>";
															}
														}
													?>
												</div>
										</form>
<!-- ---------------------------------------------------------------- -->
									</div>
									<div ><button class="btn">NEXT</button></div>
								</div>
							</div><!-- END cap_field -->
						</div>
					</div><!-- END section captcha -->
			</div>
			<!-- END page content -->
		</div>
		<!--END ONE SECTION-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>