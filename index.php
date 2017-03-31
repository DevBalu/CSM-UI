<!DOCTYPE html>
<html>
	<head>
		<?php include "components/head.php"; ?>
	</head>
	<body>
		<!--MAIN SECTION-->
		<div id="mainSec">
			<!--nav-->
			<?php include("components/navbar.php") ?>
			<!--END nav-->

			<!-- page_bg_slideshow -->
			<?php  include("components/page_bg.php") ?>
			<!-- END page_bg_slideshow -->

			<div id="content" class="content "><!-- page content -->
				<div id="search" class="hc"><!-- search field -->
					<div class="introduction">
						<h3>Check who you're trading with.</h3>
						<h3>The best scammer detector.</h3>
					</div>

					<div class="field">
						<div class="row wrapfield">
							<div class="col s10 m10 l10"><input type="text"></div>
							<div class="wrapbtn col s2 m2 l2 "><button href="#" class="btn item_center" type="submit"><i class="material-icons">search</i></div>
						</div>
					</div>
				</div><!-- END search field -->

				<div><!-- adsence -->
					<div id="adsence">
					</div>
				</div><!-- END adsence -->

			</div><!-- END page content -->
		</div>
		<!--END MAIN SECTION-->

		<!-- LIBS -->
		<?php include"components/libs.php"; ?>
		<!-- END LIBS -->
	</body>
</html>