<?php
	set_include_path(dirname(__FILE__)."/../");
	require_once("login/classes/authentication.php");
	$membership = new authentication();
	$membership->confirmMember();
	if (isset($_COOKIE['user']))
	{
		$user = $_COOKIE['user'];
	}
	else
	{
		header("location: /../login/");
	}

?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>FFHS ROV</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/rov.css?<?=time();?>" />
		<script src="js/modernizr.js"></script>
	</head>
	<body>
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
				<li class="name">
					<h1><a href="index.php">First Flight ROV</a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>

			<section class="top-bar-section">
				<ul class="right">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="#">About Us</a></li>
					<li class="has-dropdown">
						<a href="#">Sponsors</a>
						<ul class="dropdown">
							<li><a href="/rov/sponsors/2k13.php">2013 Sponsors</a></li>
							<li><a href="/rov/sponsors/2k11.php">2011 Sponsors</a></li>
							<li><a href="/rov/sponsors/2k10.php">2010 Sponsors</a></li>
						</ul>
					</li>
					<li><a href="mate.php">The Competition</a></li>
					<li><a href="#">Donate</a></li>
				</ul>
			</section>
		</nav>
		<div class="buffer"></div>
		<br />
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<hr />
				<h2>The ROV</h2>
				<hr />
				<ul data-orbit>
					<li>
						<img src="img/glamor-shot.jpg" alt="slide1"/>
						<div class="orbit-caption">
							The ROV in its natural habitat
						</div>
					</li>
					<li>
						<img src="img/datass.jpg" alt="slide1"/>
						<div class="orbit-caption">
							DATASS performing mission functions
						</div>
					</li>
					<li>
						<img src="img/moist.jpg" alt="slide1"/>
						<div class="orbit-caption">
							The ROV undergoing maintenance
						</div>
					</li>
				</ul>
				<p>In keeping with the spirit of the competition, First Flight ROV produces a new and unique ROV for each successive year of competition. Our last completed ROV, dubbed FDS-2013, was used to compete in the 2013 competition. Some of its features include:</p>
				<ul>
					<li>4 high-resolution low-light waterproof cameras</li>
					<li>An in-house designed and manufactured general-purpose Manipulator</li>
					<li>Mission-specific payload tools</li>
					<li>Woven monofilament propeller shrouds</li>
				</ul>
				<h4>To read more about our ROV, click <a href="therov.php">here</a>.</h4>
				<hr />
				<h2>The Team</h2>
				<hr />
				<img src="img/otherteam.jpg" alt="the team" />
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin luctus velit lacus, interdum scelerisque nunc hendrerit vitae. Mauris vestibulum quis augue ut accumsan. Nulla nulla ipsum, gravida in ligula nec, bibendum ultricies libero. Etiam neque mi, faucibus in sapien eget, sagittis ultricies sem. Sed blandit et felis ac mollis. Donec eu tempor justo. Suspendisse adipiscing tellus ultricies felis vehicula malesuada eget ut justo. Curabitur sed risus rhoncus velit laoreet mattis. Donec porta interdum erat, sed volutpat lectus consequat sit amet. Cras luctus pretium enim. Ut ac venenatis erat. Ut bibendum pretium magna, vel scelerisque ante. Nunc commodo justo lorem, quis dictum felis viverra a. Praesent tincidunt purus ac lacus elementum pulvinar.</p>
			</div>
		</div>

		<div class="bottom-bar">
			<img class="therefore" src="img/therefore.svg" alt="therefore" />
			<h4><small>&copy;2014 Matthew Thibodeau</small></h4>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/foundation/foundation.topbar.js"></script>

		<script>
			$(document).foundation({
				orbit: {
					pause_on_hover: true,
					resume_on_mouseout: false,
					timer_speed: 5000
				}
			});
		</script>
	</body>
</html>
