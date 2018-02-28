<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mikrodidakt</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="http://www.mikrodidakt.se/favicon.ico"/>

	<!-- Font awesome icons -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Column adjustment -->
  <link href="css/column-height-classes.css" rel="stylesheet">

	<!-- Mikrodidakt theme -->
	<link href="css/mikrodidakt-theme.css" rel="stylesheet">

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="text/javascript">
		// When the window has finished loading create our google map below
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			// Basic options for a simple Google Map
			// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
			var mapOptions = {
				// How zoomed in you want the map to start at (always required)
				zoom: 11,

				// Disable scroll wheel
				scrollwheel: false,

				// The latitude and longitude to center the map (always required)
				center: new google.maps.LatLng(55.69255,	13.21299), // Mikrodidakt

				// Map style.
				styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#3376A9"},{"visibility":"on"}]}]
			};

			// Get the HTML DOM element that will contain your map
			// We are using a div with id="map" seen below in the <body>
			var mapElement = document.getElementById('map');

			// Create the Google Map using our element and options defined above
			var map = new google.maps.Map(mapElement, mapOptions);

			// Disable mouse wheel unless map is focued
			map.addListener('click', function() { if(map) map.setOptions({ scrollwheel: true }); });
			map.addListener('mouseout', function() { if(map) map.setOptions({ scrollwheel: false }); });

			// Let's also add a marker while we're at it
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(55.69255,	13.21299),
				map: map,
				title: 'Mikrodidakt AB'
			});

			var infowindow = new google.maps.InfoWindow({
				content:"<strong>Mikrodidakt AB</strong></br>Skifferv&auml;gen 48"});
			infowindow.open(map,marker);
		}
</script>

</head>
<body data-spy="scroll" data-target="#my-navbar">
	<!-- Padding elements behind navigation bar -->
	<div class="visible-xs" style="height:87px; background: #363636;"></div>
	<div class="hidden-xs" style="height:128px; background: #363636;"></div>

	<!-- Navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
  	<div class="container">
  		<!-- Navbar Header-->
			<div class="navbar-header">
				<!-- Collapsed menu button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="nav navbar-nav">
					<a href="#" class="navbar-brand navbar-logo goto-top">
						<span><img src="images/Uggla_64.png" alt="Mikrodidakt"></span>
						<span class="brand-name">mikrodidakt<small>- est 1980 -</small></span>
					</a>
				</div><!-- End nav -->
			</div><!-- End Navbar header -->

			<!-- Contact info -->
			<div class="top-contact pull-right hidden-xs">
				<a href="mailto:info#" class="email"><i class="fa fa-envelope-o fa-fw"></i> mail us!</a>
				<p><a href="tel:004646325040"><i class="fa fa-phone fa-fw"></i> +46 46 325040</a></br>
			</div><!-- End top contact -->
		</div><!-- End container -->

		<!-- Navigation -->
		<div class="nav-container">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#about">ABOUT</a>
						<li><a href="#consulting">CONSULTING</a>
						<li><a href="#embedded">EMBEDDED DESIGN</a>
						<li><a href="#manufacturing">MANUFACTURING</a>
						<li><a href="#contact">CONTACT</a>
					</ul>
				</div>
			</div><!-- End Container-->
		</div><!-- End Nav-Container -->
  </nav><!-- End navbar -->

  	<!-- Jumbotron -->
	<?php include 'jumbotron.php';?>
  
	<!-- Features -->
	<?php include 'features.php';?>

	<!-- About Us -->
	<?php include 'about.php';?>

		<!-- Quote -->
	<?php include 'quotes1.php';?>

	<!-- Consulting -->
	<?php include 'consulting.php';?>

	<!-- Ideas -->
	<?php include 'quotes2.php';?>

	<!-- Embedded Design -->
	<?php include 'embedded.php';?>

	<!-- Manufacturing -->
	<?php include 'manufacturing.php';?>

	<!-- Contact -->
	<?php include 'contact.php';?>

	<!-- Footer -->
  <footer>
		<div class="social-media text-center">
			<a href="https://www.linkedin.com/company/mikrodidakt-ab" target="_blank"><img src="images/logo_linkedin_flat_white_93x21.png"/></a>
		</div>

		<div class="container">
			<div class="footer-info row row-eq-height">
				<div class="col-sm-3 hidden-xs">
					<h3>NAVIGATE</h3>
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#" class="goto-top">HOME</a>
						<li><a href="#about">ABOUT</a>
						<li><a href="#consulting">CONSULTING</a>
						<li><a href="#embedded">EMBEDDED DESIGN</a>
						<li><a href="#manufacturing">MANUFACTURING</a>
						<li><a href="#contact">CONTACT</a>
						<li><a href="http://blog.theowls.se/">BLOG</a>
					</ul>
				</div><!-- End column -->
				<div class="col-sm-3 hidden-xs">
					<h3>CONTACT</h3>
					<address>
						<strong>Mikrodidakt AB</strong></br>
						Skifferv&auml;gen 48</br>
						SE-224 78 LUND</br>
						Sweden</br></br>
						<a href="tel:004646325040"><i class="fa fa-phone fa-fw"></i> +46 46 325040</a></br>
						<i class="fa fa-fax fa-fw"></i> +46 46 325049</br>
						<a href="mailto:info#" class="email"><i class="fa fa-envelope-o fa-fw"></i> info@mikrodidakt.se</a>
					</address>
				</div><!-- End column -->
				<div class="col-sm-3 hidden-xs">
					<h3>ABOUT</h3>
					<p>Mikrodidakt AB was founded in Lund, Sweden, in the early 80's. This was the time when electronics benefit from the large scale integration technology and made it possible to put a computer in just a few components. The microcomputer was born, today called embedded system.</p>
				</div><!-- End column -->
				<div class="col-sm-3 col-xs-12 image-container">
					<div class="center-image text-center">
						<img src="images/Uggla_64.png">
						<span class="brand-name">mikrodidakt<small>- est 1980 -</small></span>
					</div>
				</div><!-- End column -->
			</div><!-- End row -->
		</div><!-- end Container-->

		<div class="copyright text-center">
			<i class="fa fa-copyright"></i> Mikrodidakt AB 2015-2016. All rights reserved.
		</div>
  </footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
	<!-- Parallax effects -->
  <script src="js/simple-parallax.js"></script>
	<!-- Smooth scrolling -->
  <script src="js/smooth-scroll.js"></script>
	<!-- Shrink nav -->
  <script src="js/shrink-scroll.js"></script>
	<!-- Collapses menu on click -->
  <script src="js/collapse-menu.js"></script>
	<!-- Input validator -->
  <script src="js/validator.min.js"></script>
	<!-- Form submit -->
  <script src="js/form-submit.js"></script>
	<!-- Email generator -->
	<script src="js/email-address-generator.js"></script>
</body>
</html>
