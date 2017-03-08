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
									<div class="col s10 m10 l10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia doloribus ipsam aliquam explicabo, et possimus magni officiis ratione dicta illo! Recusandae, magnam. Sint cum sapiente consequatur, quae deserunt, voluptas explicabo odio! Non quae sapiente labore ipsa dolores, quaerat beatae eos totam esse, sunt dolorem sint praesentium, alias enim minima eius repudiandae deleniti animi consequuntur? Quas sequi maxime eveniet qui cumque cum explicabo voluptatum, neque corrupti ratione, laboriosam fuga, aliquam dignissimos quo eaque aperiam. Repudiandae, maiores! Ratione voluptatem cum ad soluta blanditiis. Velit facere rem, quaerat consequatur repudiandae sit. Rem id voluptatem harum dignissimos, nostrum itaque ea eaque quam sit. Rerum.</div>
									<div class="input-field col s12">
										<input id="verif" class="validate" style="margin: 0px; border: 1px solid #ddd;" placeholder="fill the characters from image">
									</div>
									<div ><button class="btn"></button></div>
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