<!DOCTYPE html>
	<head>
		<?php include "components/head.php"; ?>
		<link rel="stylesheet" type="text/css" href="css/search_result.css">
		<!-- END custom style -->
	</head>
<html>
	<body>
	<head>
		<!--ONE SECTION-->
		<div id="mainSec">
			<!--nav-->
			<?php include("components/navbar.php") ?>
			<!--END nav-->

			<!-- page_bg_slideshow -->
			<?php include("components/page_bg.php") ?>
			<!-- END page_bg_slideshow -->

			<div id="search_result"><!-- search result -->

				<div id="user_compare_block"><!-- USER COMPARE BLOCK -->
					<form id="user_comapre_form" action="">
						<input class="btn" type="submit" value="compare">
					</form>
				</div><!-- END USER COMPARE BLOCK -->

				<div class="container"><!-- container -->
					<div class="row"><!-- row -->

						<!-- ITEMS -->
						<div id="ostap_bender"><!-- user_id -->
							<div class="item_wrap col s6 l5 offset-s2">
								<div class="item_content">
									<div class="row">
										<div class="col s6 l6">
											<div class="user_image item_center"><!-- user image -->
												<img src="image/Ostap_Bender.jpg">
											</div><!-- END user image -->
										</div>

										<div class="col s6 l6 info_right">
											<div class="row">
												<div class="user_name"><p>Ostap Bender</p></div><!-- user name -->

												<div class="country col s12 l12"><!-- country -->
													<div class="country_flag">
														<img src="image/ro.png">
													</div>
													<p class="nr_data col s12 l12">Russia</p>
												</div><!-- END country -->

												<div class="rating">
													<!-- <div class="row"> -->
														<div class="level count_data col s5 l5"><!-- level -->
															<div class="vc">
																<p>Level</p>
																<div class="level_wrap item_center">15</div>
															</div>
														</div><!-- END level -->

														<div class="xp_count col s6 l6"><!-- XP count -->
															<p class="">5,960 XP</p>
														</div><!-- END XP count -->
													<!-- </div> -->
												</div>

												<div class="play_time vc col s12 l12"><!-- playtima -->
													<div class="count_data ">
														<p>Playtime: <span class="hour nr_data">30.50 h</span>
														</p>
													</div>
												</div><!--END  playtima -->
											</div><!-- END row -->

										</div><!-- info_right -->

										<!-- status -->
											<div class="status">
												<div class="col s12 l12">
													<p class="curentli">Currently 
														<span class="of_on">Offline</span>
													</p>
												</div>

												<div class="col s12 l12">
													<span class="last_visit">Last online 8hrs, 44mins ago</span>
												</div>
											</div>
										<!-- END status -->

										<div class="col s12 l12"><!-- acount created -->
											<div class="account_created count_data">
												<p>Account created: 
													<span class="data_created nr_data">25/08/2016</span>
												</p>
											</div>
										</div><!-- END acount created -->

										<div class="col s6 l6"><!-- steam url -->
											<div class="steam_url count_data">
												<p>Steam URL : 
													<span class="s_url nr_data"><a href="#">Here</a></span>
												</p>
											</div>
										</div><!-- END steam url -->

										<div class="col s6 l6"><!-- steam url -->
											<div class="csu_url count_data">
												<p>CSU URL : 
													<span class="s_url nr_data"><a href="#">Here</a></span>
												</p>
											</div>
										</div><!-- END steam url -->

										<div class="divid col s12 l12"></div>

										<div class="col s6 l6"><!-- Number of games -->
											<div class="nr_game count_data">
												<p>Game : <span class="nr_data">1,256</span></p>
											</div>
										</div><!-- END Number of games -->

										<div class="col s6 l6 pdr"><!-- Number of friends -->
											<div class="nr_friends count_data">
												<p>Friends : <span class="nr_data">393</span></p>
											</div>
										</div><!-- END Number of friends -->

										<div class="col s6 l6"><!-- Number of groups -->
											<div class="nr_groups count_data">
												<p>Groups : <span class="nr_data">193</span></p>
											</div>
										</div><!-- END Number of groups -->

										<div  class="col s6 l6"><!-- VAC bans -->
											<div class="vac_bans count_data">
												<p>VAC Bans : <span class="nr_data">15</span></p>
											</div>
										</div><!-- END VAC bans -->

										<div class="col s6 l6 pdr"><!-- community Bans -->
											<div class="community_bans count_data">
												<p>Community Bans : <span class="nr_data">7</span></p>
											</div>
										</div><!-- END community Bans -->


									</div><!-- END row -->

									<input class="input_hidden" type="hidden" value="ostap_bender"><!-- input with user id value -->
									<div class="compare_button item_center" data-item="ostap_bender"><!-- compare_button -->
										<p>add to compare list</p>
									</div><!-- END compare_button -->

								</div><!-- END item_content -->
							</div><!-- END item wrapper -->
						</div><!-- END user_id -->

						<!-- END ITEMS -->

					</div><!-- END row -->
				</div><!-- END container -->
			</div><!-- END search result -->
		</div><!--END ONE SECTION-->

		<!-- LIBS -->
		<?php include"components/libs.php"; ?>
		<script type="text/javascript" src="js/search_result.js"></script>
		<!-- END LIBS -->
	</body>
</html>