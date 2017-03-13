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
			<?php include("components/page_bg.php") ?>
			<!-- END page_bg_slideshow -->

			<!-- page content -->
			<div id="auth_step1" class="container">
				<div id="curent_steps">
					<div class="steps item_center"><div class="item_center">1</div></div>
					<div class="steps item_center"><div class="item_center paint_step">2</div></div>
					<div class="steps item_center"><div class="item_center">3</div></div>
					<div class="steps item_center"><div class="item_center">4</div></div>
				</div>

				<div class="text"><!-- explication -->
					<h3>Virify you personal data</h3>
				</div><!-- END explication -->

				<div class="info""><!-- info -->
					<div class="personal_data_steam"><!-- personal_data_steam -->
						<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt nam amet laboriosam ipsam, ab sunt magnam earum. Asperiores facilis pariatur omnis rerum sapiente libero et molestiae maiores, dolor, qui iste quia eos? Ratione facilis enim in error officia aperiam voluptate labore velit ut rem quos nostrum quae quia facere neque ad tempore blanditiis deleniti ducimus ipsam, quaerat? Maxime, dolores, perferendis. Hic, distinctio? Obcaecati unde itaque dicta voluptas facere numquam ab placeat excepturi nam temporibus necessitatibus a, labore non aut ex fugit tempore. Explicabo labore, dolorum praesentium provident quis soluta earum accusantium consequuntur ullam, at veniam repellendus mollitia ea repellat ut!</p></div>
						<div><p>Last Name</p></div>
						<div><p>Last Name</p></div>
						<div><p>Last Name</p></div>
						<div><p>Last Name</p></div>
						<div><p>Last Name</p></div>
						<div><p>Last Name</p></div>
					</div><!-- END personal_data_steam -->
					<div class="col s12">
						<label>This is an inline input field:</label>
						<div class="input-field inline">
							<input id="email" type="email" class="validate">
							<label for="email" data-error="wrong" data-success="right">Email</label>
						</div>
					</div>
					<div>
						<button class="btn">NEXT</button>
					</div>
			</div><!-- END info -->
		</div><!-- END page content -->
		<!--END ONE SECTION-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>