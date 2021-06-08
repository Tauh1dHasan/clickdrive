<?php

// Getting Database connection
	require "admin/inc/db.php";

	$message = '';
	if (isset($_POST['submit'])) {
		date_default_timezone_set("Europe/Amsterdam");
		$date_time = date("jS F Y");

		$name = mysqli_escape_string($conn, $_POST['name']);
		$phone = mysqli_escape_string($conn, $_POST['phone']);

		$sql = "INSERT INTO leads (name, phone, date_time, status) VALUES ('$name', '$phone', '$date_time', 'new')";
		$run_sql = mysqli_query($conn, $sql);

		if ($run_sql) {
			$message = "success";
		}else{
			$message = "fail";
		}
	}

?>



<!DOCTYPE html>
<html lang="en-US">

<head>

	<!-- Meta
	============================================= -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Stylesheets
	============================================= -->
	<link href="css/css-assets.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,500i,600,600i" rel="stylesheet">

	<!-- Favicon
	============================================= -->
	<link rel="shortcut icon" href="images/general-elements/favicon/favicon.ico">

	<!-- Title
	============================================= -->
	<title>ClickDrive</title>

</head>

<body>

	<!-- Document Full Container
	============================================= -->
	<div id="full-container">

		<!-- Banner
		============================================= -->
		<section id="banner">

			<div class="banner-parallax">
				<div class="overlay-colored color-bg-theme opacity-80"></div><!-- .overlay-colored end -->
				<div class="slide-content">

					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="banner-center-box text-white text-center">


									<img class="logo-banner" src="images/logoWhite.svg" alt="clickdrive logo" style="width: 130px;">
									<h1 style="font-size: 3.3em">Get your <span><img src="images/BG_less_dutch.png" style="display: inline;"></span> Driver's license</h1>
									<div class="description">
										<h3 style="font-weight: 500;">Please leave your phone number and we will call you back</h3>
										
									</div>
									<div class="cta-subscribe cta-subscribe-3 box-form">
										<i class="cs-arrow fa fa-angle-down"></i>
										<div class="box-content">


											<form id="form-cta-subscribe-2" class="form-inline" action="index.php" method="POST">
												<div class="cs-notifications">
													<div class="cs-notifications-content"></div>
												</div><!-- .cs-notifications end -->

												<div class="form-group">
													<input type="text" name="name" id="cs2Name" class="form-control" placeholder="Your Name" required>
												</div><!-- .form-group end -->
												
												<div class="form-group">
													<input type="number" name="phone" id="cs2PhoneNum" class="form-control" placeholder="Phone Number" required>
												</div><!-- .form-group end -->

												<div class="form-group">
													<input type="submit" name="submit" class="form-control" value="Send Request">
												</div><!-- .form-group end -->
											</form><!-- #form-cta-subscribe-2 end -->


										</div><!-- .box-content end -->
									</div><!-- .box-form end -->

									
							<?php  
								if ($message == 'success')  {
							?>
									<div style="background: #1af28f;">
									  <p style="font-size: 2em;">Thank you. Our team will contact you soon...</p>
									  
									</div>
							<?php
								}elseif($message == 'fail'){
							?>
								<div style="background: #f7412d;">
									  <p style="font-size: 2em;">Something went wrong, please try again or contact us directly...</p>
									</div>
							<?php
								}


							?>

									




								<h3 style="padding-top: 20px; font-weight: 500;">Have your license within the mandatory 6 months</h3>
								</div><!-- .banner-center-box end -->

							</div><!-- .col-md-12 end -->
						</div><!-- .row end -->
					</div><!-- .container end -->

				</div><!-- .slide-content end -->
			</div><!-- .banner-parallax end -->

		</section><!-- #banner end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div id="content-wrap">

				<!-- === Intro Features =========== -->
				<div id="intro-features" class="flat-section">

					<div class="section-content">

						<div class="container">
							<div class="row">

								<div class="text-center" style="padding-bottom: 3em;">
									<h2 style="font-size: 3em;">Our services</h2>
								</div>
								
								<div class="col-md-6">
									
									<div class="box-info mb-md-50">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-heart"></i></div>
										<div class="box-content">
											<h4>Arrange your health certificate</h4>
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
								<div class="col-md-6">
									
									<div class="box-info">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-file-text-o"></i></div>
										<div class="box-content">
											<h4>Arrange your theory books</h4>
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->										

								</div><!-- .col-md-6 end -->

								<div class="divider-70"></div>

								<div class="col-md-6">
									
									<div class="box-info mb-md-50">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-check-circle"></i></div>
										<div class="box-content">
											<h4>Plan your throry exam</h4>
											
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
								<div class="col-md-6">
									
									<div class="box-info">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-search"></i></div>
										<div class="box-content">
											<h4>Find the right instructor</h4>
											
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->										

								</div><!-- .col-md-6 end -->
								<div class="divider-70"></div>
								<div class="col-md-6">
									
									<div class="box-info mb-md-50">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-cogs"></i></div>
										<div class="box-content">
											<h4>Plan your practical exam</h4>
											
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->

								</div><!-- .col-md-6 end -->
								<div class="col-md-6">
									
									<div class="box-info">
										<div class="box-icon icon x2 colorful-icon mr-20"><i class="fa fa-commenting-o"></i></div>
										<div class="box-content">
											<h4>24/7 Support for all your questions</h4>
											
										</div><!-- .box-content end -->
									</div><!-- .box-info end -->										

								</div><!-- .col-md-6 end -->

							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->

				<!-- === Watch Video =========== -->
				<div id="watch-video" class="flat-section center-vertical" data-scroll-index="2">

					<div class="section-content">

						<div class="container">
							<h2 class="text-center" style="font-size: 2em; padding-bottom: 20px;">We provide customer service with a smile</h2>
							<div class="row">

								<!-- <div class="text-center col-md-12 col-sm-12" style="padding-bottom: 3em;">
									<h2 style="font-size: 3em;">We provide customer service with a smile</h2>
								</div> -->

								<div class="col-md-4">

									<div class="box-center">
										<div class="video-preview">
											<p style="position: absolute; 
												z-index: 333; 
												padding-left: 30%; 
												padding-top: 80%;">

												<span style="padding: 0 25% 0 25%; 
												    border-radius: 40%; 
													background: #0274F5; 
													color: white; 
													font-size: 1.5em;">Barbara</span>
											</p>
											<img class="img-fluid" src="images/Barbara.png" alt="Barbara">

										</div><!-- .video-preview end -->										
									</div><!-- .box-center end -->

								</div>

								<div class="col-md-4">

									<div class="box-center">
										<div class="video-preview">
											<p style="position: absolute; 
												z-index: 333; 
												padding-left: 35%; 
												padding-top: 80%;">

												<span style="padding: 0 25% 0 25%; 
												    border-radius: 40%; 
													background: #0274F5; 
													color: white; 
													font-size: 1.5em;">Joost</span>
											</p>
											<img class="img-fluid" src="images/Joost_profile.png" alt="">
										</div><!-- .video-preview end -->										
									</div><!-- .box-center end -->

								</div><!-- .col-md-6 end -->

								<div class="col-md-4">

									<div class="box-center">
										<div class="video-preview">
											<p style="position: absolute; 
												z-index: 333; 
												padding-left: 40%; 
												padding-top: 80%;">

												<span style="padding: 0 25% 0 25%; 
												    border-radius: 40%; 
													background: #0274F5; 
													color: white; 
													font-size: 1.5em;">Bart</span>
											</p>
											<img class="img-fluid" src="images/Bart_profile.png" alt="">
										</div><!-- .video-preview end -->										
									</div><!-- .box-center end -->

								</div><!-- .col-md-6 end -->

							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .flat-section end -->


				<!-- === CTA Title 1 =========== -->
				<div id="cta-title-1" class="parallax-section">

					
					<div class="section-content">

						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center">

									<h1>Contact</h1>
									
									<h3 style="font-weight: 600;">
										<i class="fa fa-map-marker" style="color: #425cbb;"></i> 
										Goudsesingel 136,  3011KD Rotterdam
									</h3>

									<h3 style="font-weight: 600;">
										<i class="fa fa-mobile" style="color: #425cbb;"></i> 
										085-8085123
									</h3>

									<h3 style="font-weight: 600;">
										<i class="fa fa-envelope" style="color: #425cbb;"></i> 
										info@clickdrive.nl
									</h3>

									<h1 style="padding-top: 25px;">Get the app</h1>
									
									<a href="https://play.google.com/store/apps/details?id=com.cloudprimero.clickdrive&hl=nl">
										<img src="images/googlePlay.png">
										
									</a>
									
									<a href="https://apps.apple.com/nl/app/clickdrive/id1525796033">
										<img src="images/AppStore.png">
									</a>
									

								</div><!-- .col-md-8 end -->
							</div><!-- .row end -->
						</div><!-- .container end -->

					</div><!-- .section-content end -->

				</div><!-- .parallax-section end -->

			</div><!-- #content-wrap -->

		</section><!-- #content end -->

		<!-- Footer Mini
		============================================= -->
		<footer id="footer-mini">

			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="copyrights-message"> &copy; <span class="colored">ClickDrive</span>. All rights reserved. <br> Developed by <a href="https://github.com/Tauh1dHasan/" target="_blank">Tauhid Hasan</a></div>

					</div><!-- .col-md-12 end -->
				</div><!-- .row end -->
			</div><!-- .container end -->

		</footer><!-- #footer-mini end -->

	</div><!-- #full-container end -->

	<a class="scroll-top-icon scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

	<!-- External JavaScripts
	============================================= -->



</body>

</html>
