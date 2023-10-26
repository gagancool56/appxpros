<?php
$requestedUri = '';
if (isset($_SERVER['REQUEST_URI'])) {
	$requestedUri = $_SERVER['REQUEST_URI'];
	$requestedUri = explode('/', $requestedUri);
	$requestedUri = end($requestedUri);
	$requestedUri = str_replace('.php', '', $requestedUri);
	echo "<script>const url='" . $requestedUri . "'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Appxpros</title>
	<meta name="description" content="Appxpros is a Mobile App Development Agency." />
	<meta name="keywords" content="Appxpros, mobile app, agency, development, html" />
	<meta name="author" content="tempload" />

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/images/favicon.png" />

	<!-- Bootstrap & Plugins CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div class="loader-wrapper">
		<div class="center">
			<div class="dot dot-one"></div>
			<div class="dot dot-two"></div>
			<div class="dot dot-three"></div>
			<div class="dot dot-four"></div>
			<div class="dot dot-five"></div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->

	<!-- ***** Header Area Start ***** -->
	<header class="header-area shadow-lg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.php" class="logo">
							<!-- <img src="assets/images/lightNewLogo.svg" class="light-logo" alt="Beapp"/> -->
							<img src="assets/images/darkNewLogo.svg" height="30" class="light-logo" alt="Beapp" />
							<img src="assets/images/darkNewLogo.svg" height="30" class="dark-logo" alt="Beapp" />
						</a>
						<!-- ***** Logo End ***** -->

						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="index.php">HOME</a></li>
							<li><a href="about-us.php">ABOUT US</a></li>
							<li class="mactive"><a href="index.php#how-it-works">HOW IT WORKS?</a></li>
							<li><a href="services.php">SERVICES</a></li>
							<li><a href="contact.php" class="btn-nav-line" style="background:#165CC5;color:#fff;">CONTACT US</a></li>
						</ul>
						<a class="menu-trigger">
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->