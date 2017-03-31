<nav class="nav-extended"> 
	<div class="nav-wrapper">
		<!--nav - logo for mob--><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<div class="container">
			<div class="row">
				<!-- nav desctop -->
				<div id="logo" class="col s5 offset-s3 l2 offset-l1"><a href="index.php">
					<img src="image/globalheader_logo.png">
				</a></div>
				<div class="col l5">
					<ul id="nav-mobile" class="hide-on-med-and-down">
						<li><a class="dropdown-button" href="#!" data-activates="store">STORE</a></li>
						<li><a class="dropdown-button" href="#!" data-activates="community">COMMUNITY</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">SUPPORT</a></li>
					</ul>
				</div>
				<div class="auth col l3 right">
					<?php if (!empty($_GET['login'])): ?>
						<form action='/' method='get'><button id="logout" class="btn" name='logout' type='submit'>Logout</button></form>
					<?php else: ?>
						<a href='?login'><img src='https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png'></a>
					<?php endif; ?>
				</div>
				<!-- dropdowns -->
				<ul id="store" class="dropdown-content">
					<li><a href="#!">FEUTERED</a></li>
					<li><a href="#!">EXPLORE</a></li>
					<li><a href="#!">CURATORS</a></li>
					<li><a href="#!">WISHLIST</a></li>
				</ul>
				<ul id="community" class="dropdown-content">
					<li><a href="#!">HOME</a></li>
					<li><a href="#!">DISCUSION</a></li>
						<li><a href="#!">WORKSHOP</a></li>
					<li><a href="#!">GREENLIGHT</a></li>
				</ul>
				<!-- END dropdowns -->

				<!-- END nav descyop -->
				<!--nav mob-->
				<ul id="mobile-demo" class="side-nav">
					<li><a href="#">HOW IT WORK</a></li>
					<li><a href="#">BRANDS</a></li>
					<li><a href="#">BROWSE</a></li>
					<li><a href="#">CAREERS</a></li>
					<li><a href="#">INVESTORS</a></li>
					<li><a href="#">ABOUT</a></li>
				</ul>
				<!--END nav mob-->

			</div><!--END row -->
		</div><!-- END container -->
	</div><!-- END nav-wrapper -->
</nav>