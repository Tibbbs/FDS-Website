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
					<h1><a href="#">First Flight ROV</a></h1>
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
							<li><a href="#">2013 Sponsors</a></li>
							<li><a href="#">2012 Sponsors</a></li>
							<li><a href="#">2011 Sponsors</a></li>
						</ul>
					</li>
					<li><a href="#">The Competition</a></li>
					<li><a href="#">Donate</a></li>
				</ul>
			</section>
		</nav>
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
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus magna velit, mollis vel suscipit vitae, interdum in sem. Vestibulum sodales enim hendrerit justo fringilla, sed dapibus augue ullamcorper. Ut a diam euismod, dapibus ipsum non, porttitor sapien. Nam commodo risus vitae ligula egestas dictum. Vivamus sollicitudin vehicula ante, ut iaculis erat eleifend a. Quisque et tincidunt leo, in iaculis turpis. Maecenas rhoncus leo non dolor sagittis dignissim. Praesent vitae velit velit. Cras mollis consectetur sem, eget elementum ligula facilisis et. Donec dolor nulla, viverra in consectetur eget, auctor a eros.</p>
			<hr />
			<h2>The Team</h2>
			<hr />
			<img src="img/otherteam.jpg" alt="the team" />
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin luctus velit lacus, interdum scelerisque nunc hendrerit vitae. Mauris vestibulum quis augue ut accumsan. Nulla nulla ipsum, gravida in ligula nec, bibendum ultricies libero. Etiam neque mi, faucibus in sapien eget, sagittis ultricies sem. Sed blandit et felis ac mollis. Donec eu tempor justo. Suspendisse adipiscing tellus ultricies felis vehicula malesuada eget ut justo. Curabitur sed risus rhoncus velit laoreet mattis. Donec porta interdum erat, sed volutpat lectus consequat sit amet. Cras luctus pretium enim. Ut ac venenatis erat. Ut bibendum pretium magna, vel scelerisque ante. Nunc commodo justo lorem, quis dictum felis viverra a. Praesent tincidunt purus ac lacus elementum pulvinar.</p>
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
