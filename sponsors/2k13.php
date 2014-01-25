<?php
	set_include_path(dirname(__FILE__)."/../../");
	require_once("login/classes/authentication.php");
	$membership = new authentication();
	$membership->confirmMember();
	if (isset($_COOKIE['user']))
	{
		$user = $_COOKIE['user'];
	}
	else
	{
		header("location: /../../login/");
	}

?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>FFHS ROV</title>
		<link rel="stylesheet" href="../css/foundation.css" />
		<link rel="stylesheet" href="../css/rov.css?<?=time();?>" />
		<script src="../js/modernizr.js"></script>
	</head>
	<body>
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name">
					<h1><a href="../index.php">First Flight ROV</a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>

			<section class="top-bar-section">
				<ul class="right">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../about.php">About Us</a></li>
					<li class="has-dropdown active">
						<a href="#">Sponsors</a>
						<ul class="dropdown">
							<li class="active"><a href="#">2013 Sponsors</a></li>
							<li><a href="2k11.php">2011 Sponsors</a></li>
							<li><a href="2k10.php">2010 Sponsors</a></li>
						</ul>
					</li>
					<li><a href="../mate.php">The Competition</a></li>
					<li class="divider"></li>
					<li class="has-form">
						<a href="../donate.php" class="button">Donate</a>
					</li>
				</ul>
			</section>
		</nav>
		<div class="buffer"></div>
		<br />
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<hr />
				<h2>2013 Sponsors</h2>
				<hr />
				<p>Our program would not be possible without the generous donations we receive from our sponsors. Below is a list of our 2013 sponsors.</p>
				<br />
			</div>
		</div>
		<div class="hide-for-small">
			<div class="row equal">
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.carolinadesigns.com/" target="_blank">
						<img src="logos/cdr.png" alt="CDR" />
						<h3><small>Carolina Designs Realty</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.subconn.com" target="_blank">
						<img src="logos/sub.jpg" alt="CDR" />
						<h3><small>SubConn</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.marinetech.org" target="_blank">
						<img src="logos/mate.png" alt="CDR" />
						<h3><small>MATE Center</small></h3>
					</a>
				</div>
			</div>
			<br />
			<div class="row equal">
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.vbltech.com/" target="_blank">
						<img src="logos/vbl.png" alt="CDR" />
						<h3><small>VBL Technologies</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.obxbuilder.com/" target="_blank">
						<img src="logos/carl.gif" alt="CDR" />
						<h3><small>Carl Worseley &amp; Associates</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.flexpvc.com/" target="_blank">
						<img src="logos/flex.jpg" alt="CDR" />
						<h3><small>FlexPVC</small></h3>
					</a>
				</div>
			</div>
			<br />
			<div class="row equal">
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.carquestofnagshead.com/" target="_blank">
						<img src="logos/carquest.png" alt="CDR" />
						<h3><small>Carquest of Nags Head</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://csi.northcarolina.edu/" target="_blank">
						<img src="logos/csi.jpg" alt="CDR" />
						<h3><small>NC Coastal Studies Institute</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.grays-sportswear.com/" target="_blank">
						<img src="logos/grays.jpg" alt="CDR" />
						<h3><small>Gray's Department Store</small></h3>
					</a>
				</div>
			</div>
			<br />
			<div class="row equal">
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.ermidgettagency.com/" target="_blank">
						<img src="logos/midgett.jpg" alt="CDR" />
						<h3><small>Midgett Insurance</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.dare.k12.nc.us/" target="_blank">
						<img src="logos/dcs.jpg" alt="CDR" />
						<h3><small>Dare County Schools</small></h3>
					</a>
				</div>
				<div class="small-4 medium-4 large-4 columns sponsors">
					<a href="http://www.dardenfoundation.com/cms/index.php" target="_blank">
						<img src="logos/darden.jpg" alt="CDR" />
						<h3><small>Darden Foundation</small></h3>
					</a>
				</div>
			<hr />
			</div>
		</div>
		<div class="show-for-small">
			<div class="row">
				<div class="small-12">
					<h2>Carolina Designs Realty</h2>
					<h2>SubConn</h2>
					<h2>MATE Center</h2>
					<h2>VBL Technologies</h2>
					<h2>Carl Worseley &amp; Associates</h2>
					<h2>FlexPVC</h2>
					<h2>Carquest of Nags Head</h2>
					<h2>NC Coastal Studies Institute</h2>
					<h2>Gray's Department Store</h2>
					<h2>Midgett Insurance</h2>
					<h2>Dare County Schools</h2>
					<h2>Darden Foundation</h2>
					<hr />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-6 medium-6 large-6 columns">
				<ul class="no-bullet sponsors sponsors-low">
					<li>Kitty Hawk Car Wash</li>
					<li>FFHS PTSO</li>
					<li>Jo-El Quinlan</li>
					<li>Monica Thibodeau</li>
					<li>Larry Gray</li>
					<li>Kelly Management Group</li>
					<li>SeaScape</li>
					<li>Georgia Finch</li>
					<li>James Pickren</li>
					<li>Guy C. Lee</li>
					<li>Coastal Cottage Watch</li>
					<li>Sea Swept Design</li>
					<li>Southern Bank</li>
					<li>Julie Gray</li>
				</ul>
			</div>
			<div class="small-6 medium-6 large-6 columns">
				<ul class="no-bullet sponsors">
					<li>Lawn and Order</li>
					<li>Joe Lamb</li>
					<li>Danny Miller</li>
					<li>Anne Hunter</li>
					<li>Roy Archbell</li>
					<li>Richard Baer</li>
					<li>Kellogg Supply Company</li>
					<li>Beach Realty</li>
					<li>Bonzer Shack</li>
					<li>Susan Gray</li>
					<li>A&amp;B Carpet One</li>
					<li>Janine Harrington</li>
					<li>Marie Gabrielle</li>
				</ul>
			</div>
		</div>

		<div class="footer">
			<img class="therefore" src="../img/therefore.svg" alt="therefore" />
			<h4><small>&copy;2014 Matthew Thibodeau</small></h4>
		</div>

		<script src="../js/jquery.js"></script>
		<!--<script src="../js/jquery.equalheights.js"></script>-->
		<script src="../js/foundation.min.js"></script>
		<script src="../js/foundation/foundation.topbar.js"></script>

		<script>
			$(document).foundation({
				orbit: {
					pause_on_hover: true,
					resume_on_mouseout: false,
					timer_speed: 5000
				}
			});

			$(document).ready(function()
			{
				$(".equal").equalHeights();
			});
		</script>
	</body>
</html>