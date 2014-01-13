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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="about.php">About Us</a></li>
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
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<h1 class="main-header">First Flight ROV</h1>
				<hr />
				<h3 class="subheader">Designing, building, and competing Remotely Operated Vehicles since 2007.</h3>
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
				<hr />
				<h2>Our Philosophy</h2>
				<hr />
				<div class="row">
					<div class="large-8 medium-8 small-12 columns">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla euismod nisi sem, in iaculis metus rutrum id. Maecenas tempor dictum nulla non eleifend. Pellentesque sagittis vehicula purus nec congue. Duis pretium placerat feugiat. Suspendisse at iaculis ligula, sagittis fringilla velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam massa purus, adipiscing et felis vitae, tempor dictum nisl. Nam placerat tellus nec hendrerit posuere. Pellentesque id augue et nulla congue aliquam nec ac purus. Suspendisse potenti. In vitae hendrerit justo.</p>
						<h4>Why do they exist?</h4>
						<p>Etiam ut tempor massa, sit amet iaculis neque. Integer quis elementum arcu. Duis gravida neque id elit consequat egestas. Aenean malesuada, purus at tincidunt fermentum, massa lacus iaculis lacus, nec ultrices nunc felis id libero. Vivamus nec iaculis orci. Sed et ante ipsum. Nam tortor quam, laoreet id pharetra eu, malesuada ac ipsum. Donec sed elit magna. Praesent sodales felis libero, in bibendum erat tempus eget.</p>
					</div>
					<div class="large-4 medium-4 columns">
						<div class="hide-for-small">
							<img src="img/team.jpg" alt="The FFROV team"/>
							<h4><small>The FFROV team.</small></h4>
						</div>
					</div>
				</div>
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