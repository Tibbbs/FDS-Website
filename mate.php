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
					<li><a href="about.php">About Us</a></li>
					<li class="has-dropdown">
						<a href="#">Sponsors</a>
						<ul class="dropdown">
							<li><a href="/rov/sponsors/2k13.php">2013 Sponsors</a></li>
							<li><a href="/rov/sponsors/2k11.php">2011 Sponsors</a></li>
							<li><a href="/rov/sponsors/2k10.php">2010 Sponsors</a></li>
						</ul>
					</li>
					<li class="active"><a href="#">The Competition</a></li>
					<li class="divider"></li>
					<li class="has-form">
						<a href="donate.php" class="button">Donate</a>
					</li>
				</ul>
			</section>
		</nav>
		<div class="buffer"></div>
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<hr />
				<h2>The MATE Competition</h2>
				<hr />
				<img src="sponsors/logos/mate-orig.bmp" alt="MATE logo" id="mate-logo"/>
			</div>
		</div>
		<div class="row">
			<div class="hide-for-small">
				<div class="large-4 medium-4 columns">
					<div class="panel callout">
						<h3>2014 Competition Highlights</h3>
						<p>Our mission will include the following (simulated) activities:
						<ul>
							<li>Documenting shipwrecks in the Great Lakes</li>
							<li>Performing scientific measurments</li>
							<li>Removing trash and debris from the seabed</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="small-12 medium-8 large-8 columns">
				<h3>Visit the MATE Center's website <a href="http://www.marinetech.org/" target="_blank">here</a>.</h3>
				<p>The Marine Advanced Technology Education (MATE) Center coordinates an international student ROV competition and a network of regional ROV contests that take place across U.S. and in Canada, Hong Kong, and Scotland.  Student teams participate in the events, which consist of different “classes” that vary depending on the sophistication of the ROVs and the mission requirements.</p>
				<br />
				<p>In addition to being fun and educational, these competitions connect students and educators with employers and working professionals from marine industries, highlight marine-related career opportunities, and promote the development of technical, problem solving, critical thinking, and teamwork skills necessary for careers in marine technology.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns">
				<hr />
				<h2>Our Results</h2>
				<hr />
				<div class="row">
					<div class="large-8 medium-8 small-12 columns">
						<p>First Flight ROV first entered the MATE Center's ROV regional competition in 2008 and took first place in our first year. We finished an impressive 6th place in the international competition, also earning the Design Elegance award an Engineering MVP award. After winning the 2009 regionals, our team repeated as 6th in the world at the 2009 international competition, and again took the design elegance award. 2010 brought a triple repeat, with First Flight taking first place again in the regional competition. The difference this year was that instead of 6th place, FFROV took first place in the international competition - best in the world!</p>
						<br />
						<p>Since our international win in 2010, First Flight ROV has been focusing on more challenging ROV designs and manufacturing techniques. In 2011 FFROV again scored first place in regionals and in the top 10 at the international competition. After a year of reorganization, we returned strong in 2013, once again taking the top spot at the regional competition and scoring admirably at the international level.</p>
					</div>
					<div class="large-4 medium-4 columns">
						<div class="hide-for-small">
							<img src="img/2013-mission.jpg" alt="The FFROV team"/>
							<h4><small>The FFROV team.</small></h4>
						</div>
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