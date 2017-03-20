<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/search_result.css">
	</head>
	<body>
		<!--ONE SECTION-->
		<div id="mainSec">
			<!--nav-->
			<?php include("components/navbar.php") ?>
			<!--END nav-->

			<!-- page_bg_slideshow -->
			<?php include("components/page_bg.php") ?>
			<!-- END page_bg_slideshow -->

			<div id="search_result"><!-- search result -->

				<div id="user_compare_block" class="comparison_active"><!-- USER COMPARE BLOCK -->
					<form action="">
						<div class="thumbnail_wrapper">
							<div class="remove_user item_center">X</div>
							<div class="compare_image"><img src="image/simpson.jpg"></div>
							<div class="compare_user_name"><p>Ostap Bender</p></div>
						</div><!-- END thumbnail_wrapper -->

						<div class="thumbnail_wrapper">
							<div class="remove_user item_center">X</div>
							<div class="compare_image"><img src="image/cs.jpg"></div>
							<div class="compare_user_name"><p>Ostap Bender</p></div>
						</div><!-- END thumbnail_wrapper -->

						<div class="thumbnail_wrapper">
							<div class="remove_user item_center">X</div>
							<div class="compare_image vc"><img src="image/DevBalu.jpg"></div>
							<div class="compare_user_name"><p>Ostap Bender</p></div>
						</div><!-- END thumbnail_wrapper -->

						<div class="thumbnail_wrapper">
							<div class="remove_user item_center">X</div>
							<div class="compare_image"><img src="image/Ostap_Bender.jpg"></div>
							<div class="compare_user_name"><p>Ostap Bender</p></div>
						</div><!-- END thumbnail_wrapper -->

						<input class="btn" type="submit" value=">">
					</form>
				</div><!-- END USER COMPARE BLOCK -->

				<div class="container"><!-- container -->
					<div class="row"><!-- row -->
						<!-- ITEMS -->
						<div class="item_wrap col s6 l4 offset-s2">
							<div class="item_content">
								<div class="row">

									<div class="col l6">
										<div id="user_image" class="item_center">
											<img src="image/Ostap_Bender.jpg">
										</div>
									</div>

									<div class="col l6 info_right">
										<div id="user_name"><p>Ostap Bender</p></div>

										<div class="country">
											<div class="country_flag">
												<img src="image/ro.png">
											</div>
											<p>Russia</p>
										</div>

										<div class="count_data">
											<div id="level" class="vc">
												<div><p>Level</p></div>
												<div class="level_wrap item_center">15</div>
											</div>

											<div id="xp_count" class="vc">
												<div class="nr_data">5,960 XP</div>
											</div>
										</div>

										<div id="play_time" class="vc"><!-- playtima -->
											<div class="count_data"><p>Playtime: <span class="hour nr_data">30.50 h</span></p></div>

										</div><!--END  playtima -->


									</div>

									<div class="col l12"><!-- status -->
										<div id="status" class="count_data">
											<p>Currently 
												<span class="of_on">Offline</span>/
												<span class="last_visit">Last online 8hrs, 44mins ago</span>
											</p>
										</div>
									</div><!-- END status -->

									<div class="col l12"><!-- acount created -->
										<div id="account_created" class="count_data">
											<p>Account created: 
												<span class="data_created nr_data">25/08/2016</span>
											</p>
										</div>
									</div><!-- END acount created -->

									<div class="col l12"><!-- steam url -->
										<div id="steam_url" class="count_data">
											<p>Steam URL : 
												<span class="s_url nr_data"><a href="#">Here</a></span><span id="copy_url">copy link</span>
											</p>
										</div>
									</div><!-- END steam url -->


									<div class="col l6"><!-- Number of games -->
										<div class="count_data">
											<p>Game : <span class="nr_data">1,256</span></p>
										</div>
									</div><!-- END Number of games -->

									<div  class="col l6"><!-- Number of friends -->
										<div class="count_data">
											<p>Friends : <span class="nr_data">393</span></p>
										</div>
									</div><!-- END Number of friends -->

									<div  class="col l6"><!-- Number of groups -->
										<div class="count_data">
											<p>Groups : <span class="nr_data">193</span></p>
										</div>
									</div><!-- END Number of groups -->

									<div  class="col l6"><!-- group activity -->
										<div class="count_data">
											<p>Groups activity : <span class="nr_data">145</span></p>
										</div>
									</div><!-- END group activity -->

									<div  class="col l6"><!-- VAC bans -->
										<div class="count_data">
											<p>VAC Bans : <span class="nr_data">15</span></p>
										</div>
									</div><!-- END VAC bans -->

								</div><!-- END row -->
							</div><!-- END item_content -->
						</div><!-- END item wrapper -->


						<!-- END ITEMS -->

					</div><!-- END row -->
				</div><!-- END container -->
			</div><!-- END search result -->
		</div><!--END ONE SECTION-->

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>