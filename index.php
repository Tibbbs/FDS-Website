<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>FFHS ROV</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="css/rov.css?<?=time();?>" />
		<link rel="shortcut icon" href="favicon.ico">
		<script src="js/modernizr.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-47733608-1', 'firstflightrov.com');
			ga('send', 'pageview');
		</script>
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
					<li class="active"><a href="#">Home</a></li>
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
						<a href="donate.php" class="button">Donate</a>
					</li>
				</ul>
			</section>
		</nav>
		<div class="buffer"></div>
		<div class="masthead">
			<div class="head-wrap">
				<h1 class="main-header">First Flight ROV</h1>
				<h2 class="main-header-sub hide-for-small">Designing, building, and competing Remotely Operated Vehicles since 2007</h2>
			</div>
		</div>
		<div class="buffer"></div>
		<br />
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<h2 class="home-content-header">Advanced Competition-Ready ROVs</h2>
				<div class="row">
					<div class="large-8 medium-8 small-12 columns">
						<h4 class="home-content-header">First Flight ROV creates remotely operated vehicles, or ROVs, for use in the MATE center's annual comptition.</h4>
						<a class="button block" href="about.php#the-rov">Learn more about our ROV</a>
						<a class="button block" href="about.php#the-team">Our 2014 season team</a>
					</div>
					<div class="large-4 medium-4 columns">
						<div class="hide-for-small">
							<div class="panel callout">
								<h3>About Us</h3>
								<ul>
									<li>Annual participation in the <a href="mate.php">MATE competition</a></li>
									<li>Undefeated Mid-Atlantic Regional Champions</li>
									<li>2010 International Champions</li>
									<li>7 member high-school team</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<hr />
				<h2>What's An ROV?</h2>
				<hr />
				<div class="row">
					<div class="hide-for-small">
						<div class="large-4 medium-4 columns">
							<img src="img/kaiko.jpg" alt="A large ROV" />
							<h4><small>Kaiko, a large research ROV.</small></h4>
						</div>
					</div>
					<div class="large-8 medium-8 small-12 columns">
						<p>A Remotely Operated Vehicle (ROV) is an underwater robot that allows the vehicle's operator to remain in a comfortable environment while the ROV performs the work underwater. An umbilical, or tether, carries power and command and control signals to the vehicle and the status and sensory data back to the operators topside.</p>
						<h4>Why do they exist?</h4>
						<p>In the case of ROV technology the answer is quite simple. There is no other practical, safe and economically feasible way to perform deep underwater intervention. ROVs are one of the best tools available to researchers as they can withstand pressure at extreme depths while minimizing the risk to human life and at the cost of valuable resources. ROVs may well be the best tool available to repair non-functioning equipment.</p>
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