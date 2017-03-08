<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
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
						<div class="steps col s2 m2 l2 item_center"><div class="item_center">1</div></div>
						<div class="steps col s2 m2 l2 offset-s1 offset-m1 offset-l1 item_center"><div class="item_center">2</div></div>
						<div class="steps col s2 m2 l2 offset-s2 offset-m2 offset-l2 item_center"><div class="item_center  paint_step">3</div></div>
						<div class="steps col s2 m2 l2 offset-s1 offset-m1 offset-l1 item_center"><div class="item_center">4</div></div>
					</div>

					<div id="captcha"><!-- section captcha -->
						<div class="text"><!-- explication -->
							<h3>A message was sent to your email!
							In few moment you-ll get a configuration link.
							Click on it for finish registration!</h3>
						</div><!-- END explication -->

					</div><!-- END section content -->
			</div>
			<!-- END page content -->
		</div>
		<!--END ONE SECTION-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>