<?php
  $bg = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg' );
  $i = rand(0, count($bg)-1); 
  $selectedBg = "$bg[$i]";?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<title>Surf.Cali</title>
	<style type="text/css">
		<!--
		body {background: #02a6af;}
		@media only screen and (min-width : 700px) { 
			body {background: url(assets/img/<?php echo $selectedBg; ?>) no-repeat center center fixed;}
		} -->
	</style>
	<link rel="stylesheet/less" type="text/css" href="assets/css/master.less" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/favicon.ico"> <!--32x32px-->
	<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png"><!--60x60px-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600' rel='stylesheet' type='text/css'>
	<!-- Google Analytics Start -->
	<!-- Google Analytics End -->
</head>
<body>

	<header class="new-logo">
		<a href="/" class="logo">Surf Cali</a>
	</header>

	<div class="drag">
		<span>Drag the map!</span>
	</div>
	<div class="main-wrapper">
			<div class="map">
				<img src="assets/img/california.png" alt="">
				<ul class="nav">
					<!-- SAN MATEO -->
					<li class="mavericks">
						<a href="#beach" data-surfcali='{"spot_id":122,"county":"san-mateo"}'>Mavericks</a>	
					</li>
					<!-- SANTA CRUZ -->
					<li class="steamer-lane">
						<a href="#beach" data-surfcali='{"spot_id":2,"county":"santa-cruz"}'>Steamer Lane</a>	
					</li>
					<!-- MONTEREY -->
					<!-- <li class="salinas">
						<a href="#beach" data-surfcali='{"spot_id":703,"county":"monterey"}'>Salinas River State Beach</a>	
					</li> -->
					<!-- SAN LUIS OBISPO -->
					<!-- <li class="san-simeon-creek">
						<a href="#beach" data-surfcali='{"spot_id":166,"county":"san-luis-obispo"}'>San Simeon Creek</a>	
					</li> -->
					<li class="pismo-beach-pier">
						<a href="#beach" data-surfcali='{"spot_id":162,"county":"san-luis-obispo"}'>Pismo Beach Pier</a>	
					</li>
					<!-- VENTURA -->
					<li class="little-rincon">
						<a href="#beach" data-surfcali='{"spot_id":196,"county":"ventura"}'>Little Rincon</a>	
					</li>
					<!-- LOS ANGELES -->
					<li class="malibu">
						<a href="#beach" data-surfcali='{"spot_id":205,"county":"los-angeles"}'>Malibu</a>	
					</li>
					<li class="venice">
						<a href="#beach" data-surfcali='{"spot_id":204,"county":"los-angeles"}'>Venice</a>	
					</li>
					<!-- ORANGE COUNTY -->
					<li class="huntington-beach">
						<a href="#beach" data-surfcali='{"spot_id":643,"county":"orange-county"}'>Huntington Beach</a>	
					</li>
					<li class="newport-pier">
						<a href="#beach" data-surfcali='{"spot_id":609,"county":"orange-county"}'>Newport Pier</a>	
					</li>
					<!-- SAN DIEGO -->
					<li class="oceanside-pier">
						<a href="#beach" data-surfcali='{"spot_id":594,"county":"san-diego"}'>Oceanside Pier</a>	
					</li>
					<li class="mission-beach">
						<a href="#beach" data-surfcali='{"spot_id":397,"county":"san-diego"}'>Mission Beach</a>	
					</li>

				</ul>
			</div>

			<section id="beach" class="beach">
				<div class="forecast-general"></div>
				<div class="forecast-wind"></div>
				<div class="forecast-water-temp"></div>
				<div class="forecast-swell"></div>
				<div class="forecast-tide"></div>
			</section>
	</div>

	<input id="menu-toggle" class="menu-toggle" type="checkbox"></input>
	<div class="credits">
		<label for="menu-toggle" id="toggle" class="toggle-credits"><span>credits</span></label> 
		<span>site by <a href="http://www.liamtarpey.com">Liam Tarpey</a></span>
		<span>api: <a href="http://www.spitcast.com/">Spitcast</a></span>
		<span>logo font: <a href="http://fontfabric.com/nexa-free-font/">Nexa Bold</a></span>
	</div>

	<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="assets/js/less-1.5.0.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-surfcali.js"></script>
	<script type="text/javascript" src="assets/js/jquery.overscroll.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

</body>
</html>
