<?php
if (isset($_POST['submit']) && $_POST['submit'] == 'submitMail') {

	$to = 'gurpreetgurii745@gmail.com';

	// subject
	$subject = 'New Lead - Get in touch';

	// message
	$message = '
	<html>
	<body>
	<p>Hi, <br><br> Name:- ' . $_POST['fName'] . ' ' . $_POST['lName'] . '<br> Email:- ' . $_POST['email'] . '<br> Phone:- ' . $_POST['phone_no'] . '<br> Message:- ' . $_POST['message'] . ' </p>
	
	</body>
	</html>
	';

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Mail it
	mail($to, $subject, $message, $headers);
}
require_once 'header.php';


?>

<section class="page">
	<!-- ***** Page Top Start ***** -->
	<div class="cover">
		<div class="page-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1>Contact Us</h1>
					</div>
					<div class="col-lg-12">
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="active">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ***** Page Top End ***** -->

	<!-- ***** Page Content Start ***** -->
	<div class="page-bottom">
		<!-- <div class="map-wrapper">
			<div class="map-canvas" data-zoom="12" data-lat="-37.811085" data-lng="144.955631" data-type="roadmap"
				data-hue="#ffc400" data-title="Beapp" data-icon-path="assets/images/marker.png"
				data-content="455 West Orchard Street<br>Kings Mountain, NC 28086<br><br><a href='mailto:support@yourbrand.com'>mailto:support@yourbrand.com</a>">
			</div>

			<div class="container position-relative">
				<div class="row">
					<div class="offset-lg-8 col-lg-4 col-md-12 col-sm-12">
						<div class="contact-info">
							<div class="item">
								<i class="fa fa-location-arrow"></i>
								<div class="txt">
									<span>455 West Orchard Street<br>Kings Mountain, NC 28086</span>
								</div>
							</div>
							<div class="item">
								<i class="fa fa-phone"></i>
								<div class="txt">
									<span>(272) 211-7370<br>(524) 386-5730</span>
								</div>
							</div>
							<div class="item">
								<i class="fa fa-envelope"></i>
								<div class="txt">
									<span><a href="mailto:support@yourbrand.com">support@yourbrand.com</a></span>
								</div>
							</div>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
								<li><a href="#"><i class="fa fa-github-square"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<div class="container">
			<div class="row">
				<!-- ***** Contact Text Start ***** -->
				<div class="col-lg-4 col-md-6 col-sm-12">
					<h5 class="mbottom-30 fw-bold fs-3" style="color: #165cc5;">Start Your Digital Journey Right Now !</h5>
					<div class="contact-text">
						<div class="left-text">
							<p class="text-dark">Ask our business development staff any queries you may have.</p>
							<div class="row">
								<div class="col-1 pt-1 text-end"><i class="fa fa-mobile-phone" style="font-size:3rem;color:#165cc5;"></i></div>
								<div class="col-11 px-4">+1 (415) 630-0950 (US)<br> +91(82889-39415) (IN)</div>
							</div>
							<div class="row mt-3">
								<div class="col-1 text-end"><i class="fa fa-envelope" style="font-size:2rem;color:#165cc5;"></i></div>
								<div class="col-11 px-4"><a href="mailto:info@appxpros.com" class="text-dark">info@appxpros.com</a></div>
							</div>
						</div>

					</div>
				</div>
				<!-- ***** Contact Text End ***** -->

				<!-- ***** Contact Form Start ***** -->
				<div class="col-lg-8 col-md-6 col-sm-12">
					<div class="contact-form">
						<form method="post" action="contact.php" autocomplete="off" id="conTact_form">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<input name="fName" type="text" placeholder="First Name" required="required" autocomplete="off">
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<input name="lName" type="text" placeholder="Last Name" required="required" autocomplete="off">
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<input name="email" type="email" placeholder="E-Mail" required="required" autocomplete="off">
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<input name="phone_no" type="number" placeholder="Phone No." required="required" autocomplete="off">
								</div>
								<div class="col-lg-12">
									<textarea name="message" placeholder="Your message" required="required" autocomplete="off"></textarea>
								</div>
								<div class="col-lg-12">
									<button type="submit" name="submit" value="submitMail" class="btn-primary-line">SEND</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ***** Contact Form End ***** -->
			</div>
		</div>
	</div>
	<!-- ***** Page Content End ***** -->
</section>


<?php
require_once 'footer.php';
?>
<script type="text/javascript">
	if (window.history.replaceState) {
		window.history.replaceState(null, null, window.location.href);
	}
</script>