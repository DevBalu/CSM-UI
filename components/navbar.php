<nav class="nav-extended">  
	<div class="nav-wrapper">
		<!--nav - logo for mob--><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		<div class="container">
			<div class="row">
				<!-- nav desctop -->
				<a href="index.php"><div id="logo" class="col s5 offset-s3 l3">
					<img src="image/globalheader_logo.png">
				</div></a>
				<div class="col l5" id="parent-nav">
					<ul id="nav-mobile" class="hide-on-med-and-down">
						<li>
							<a href="#!" class="active">
								<div class="f-ch"><p>HOME</p></div>
								<div class="s-ch"><p> HOME</p></div>
							</a>
						</li>

						<li>
							<a href="#">
								<div class="f-ch">
										<p>ABOUT</p>
								</div>
								<div class="s-ch">
										<p>ABOUT</p>
								</div>
							</a>
						</li>

						<li>
							<a class="dropdown-button" href="#!" data-activates="community">
								<div class="f-ch">
									<p>DONATE</p>
								</div>
								<div class="s-ch">
									<p>DONATE</p>
								</div>
							</a>
						</li>

						<li>
							<a href="#">
								<div class="f-ch">
										<p>SUPPORT</p>
								</div>
								<div class="s-ch">
										<p>SUPPORT</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="auth right">
					<?php if (!empty($_GET['login'])): ?>
						<form action='/' method='get'><button id="logout" class="btn" name='logout' type='submit'><img src='image/sits_0s1.png'></button></form>
					<?php else: ?>
						<a href='?login'><img src='https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png'></a>
					<?php endif; ?>
				</div>
				<!-- dropdowns -->
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