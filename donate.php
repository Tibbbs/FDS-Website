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
		<div class="container">
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
						<li><a href="about.php">About Us</a></li>
						<li class="has-dropdown">
							<a href="#">Sponsors</a>
							<ul class="dropdown">
								<li><a href="/rov/sponsors/2k13.php">2013 Sponsors</a></li>
								<li><a href="/rov/sponsors/2k11.php">2011 Sponsors</a></li>
								<li><a href="/rov/sponsors/2k10.php">2010 Sponsors</a></li>
							</ul>
						</li>
						<li><a href="mate.php">The Competition</a></li>
						<li class="divider"></li>
						<li class="has-form">
							<a href="#" class="button">Donate</a>
						</li>
					</ul>
				</section>
			</nav>
			<div class="buffer"></div>
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<hr />
					<h2>Become a Sponsor</h2>
					<hr />
					<div class="panel">
						<h3>First Flight ROV must raise more than $10,000 each year. In exchange for </h3>
					</div>	
				</div>
			</div>
		</div>
		<div class="footer">
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