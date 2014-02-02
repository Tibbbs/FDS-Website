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
						<h3>First Flight ROV must raise more than $10,000 each year</h3>
						<h3>Personal and Corporate donations are accepted</h3>
						<ul id="donate-panel-ul">
							<li><h4>All donations are tax-exempt</h4></li>
							<li><h4>Sponsorship has several benefits, including advertising value</h4></li>
						</ul>
					</div>
					<hr />
					<h3>Donate</h3>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="medium-6 large-6 columns donate-cc">
					<div class="hide-for-small">
						<h4>Check or Cash Donations</h4>
						<h4><small>Please send to the following address:</small></h4>
						<ul class="vcard">
							<li class="fn">First Flight High School</li>
							<li class="fn">Attn: Andrew Thomas</li>
							<li class="street-address">100 Veterans Drive</li>
							<li class="locality">Kill Devil Hills</li>
							<li><span class="state">NC</span>, <span class="zip">27948</span></li>
						</ul>
						<h4><small>Checks can be made out to <strong>Andrew Thomas</strong></small></h4>
					</div>
				</div>
				<div class="medium-6 large-6 columns donate-cc">
					<div class="hide-for-small">
						<h4>Credit Card Donations</h4>
						<h4><small>Coming Soon!</small></h4>
					</div>
				</div>
				<div class="small-12 columns donate-cc">
					<div class="show-for-small">
						<h3>Check or Cash Donations</h3>
						<h3><small>Please send to the following address:</small></h3>
						<ul class="vcard">
							<li class="fn">First Flight High School</li>
							<li class="fn">Attn: Andrew Thomas</li>
							<li class="street-address">100 Veterans Drive</li>
							<li class="locality">Kill Devil Hills</li>
							<li><span class="state">NC</span>, <span class="zip">27948</span></li>
						</ul>
						<h3><small>Checks can be made out to <strong>FFHS ROV</strong></small></h3>
						<hr />
						<h3>Credit Card Donations</h3>
						<h3><small>Coming Soon!</small></h3>
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
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-47733608-1', 'firstflightrov.com');
			ga('send', 'pageview');
		</script>
	</body>
</html>