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
			<?php require_once("components/page_bg.php") ?>
			<!-- END page_bg_slideshow -->

			<!-- page content -->
			<div id="auth_step1" class="container">
				<div id="curent_steps">
					<div class="steps item_center"><div class="item_center">1</div></div>
					<div class="steps item_center"><div class="item_center">2</div></div>
					<div class="steps item_center"><div class="item_center">3</div></div>
					<div class="steps item_center"><div class="item_center paint_step">4</div></div>
				</div>

				<div class="text vc"><!-- explication -->
					<h3>Congratulation!
					You've registert to our site!
					Click <a href="">here</a> to see you profile!</h3>
				</div><!-- END explication -->


			<!-- END page content -->
		</div>
		<!--END ONE SECTION-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>