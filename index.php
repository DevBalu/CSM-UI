<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
		<link rel="stylesheet" href="css/style.css">
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
			<div id="content" class="content ">
				<!-- search field -->
				<div id="searchField" class="hc">
					<div class="introduction">
						<h3>Check who you're trading with.</h3>
						<h3>The best scammer detector.</h3>
					</div>
					<div class="field">
						<div class="row wrapfield">
							<div class="col s10 m10 l10"><input type="text"></div>
							<div class="wrapbtn col s2 m2 l2 "><button href="#" class="btn item_center"><i class="material-icons">search</i></div>
						</div>
					</div>
				</div>
				<!-- END search field -->
				<!-- adsence -->
				<div class="row">
					<div id="adsence" class="col l12">
					</div>
				</div>
				<!-- END adsence -->
			</div>
			<!-- END page content -->
		</div>
		<!--END ONE SECTION-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>