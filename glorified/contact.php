<?php
	include "config.php";
       
    if(isset($_POST['submit_now'])){
        $name=$_POST['co_name'];
        $email=$_POST['co_email'];
        $subject=$_POST['co_subject'];
		$message=$_POST['co_message'];
		$result = mysqli_query($con,"select * from signup_table where u_email='{$email}'") or die(mysqli_error($con));
		$num_rows = mysqli_num_rows($result);
		if($num_rows >= 1){
        	$q = mysqli_query($con,"insert into contact(u_name,u_email,u_subject,u_message) VALUES 
			('{$name}','{$email}','{$subject}','{$message}')") or die(mysqli_error($con));
			if($q){
       		echo "<script>alert('Your information is Successfully added');</script>";
            header("location:contact.php");
	
            }	
        }else{
               echo "<script>alert('You must have to register your email')</script>";
               header("location:signup1.php");
    		}
		}
		
		
?>



<!DOCTYPE html>
<html lang="zxx">


	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<!-- SITE TITLE -->
		<title>Contact Us</title>
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">	
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500&display=swap" rel="stylesheet">		
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.css">
		<!--magnific-popup Css-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<!--animate Css-->
        <link rel="stylesheet" href="assets/css/animate.css">
		<!--slick Css-->
        <link rel="stylesheet" href="assets/css/slick.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't gallery if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!-- Page Wrapper -->
		<div class="page-wrapper">
		
			<!-- START PRELOADER -->
			<div class="atf-preloader">
				<div class="atf-status">
					<div class="atf-status-mes"></div>
				</div>
			</div> 
			<!-- END PRELOADER -->	
			
			<!-- START back-to-top -->	
			<button class="atf-scroll-top atf-back-to-top" data-targets="html">
				<i class="fa fa-angle-up atf-scrollup-icon"></i>
			</button>
			<!-- END back-to-top-->	
			<div class="body-overlay" id="body-overlay"></div>
			
			<!-- search popup area start -->
			<div class="search-popup" id="search-popup">
				<form action="http://themesfamily/tm/majid/index.html" class="search-form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search.....">
					</div>
					<button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<!-- //. search Popup -->
		
							<!-- Start Header Section -->
			<header class="atf-site-header atf-style1 atf-sticky-header">
				<div class="atf-top-header">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<div class="atf-top-header-in wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
									<ul class="atf-top-header-list">
										<li><i class="fas fa-envelope"></i>Email: <a href="#"> sample@gmail.com</a></li>
										<li><i class="fas fa-phone-volume"></i>Contact: <a href="#">+91 9727622124</a></li>
									</ul>
								</div>
							</div><!--- END COL -->
							<div class="col-lg-4 col-md-4">
								<div class="nav-right-part nav-right-part-desktop">
									<ul>
										<li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
										<li class=""><a class="login-btn" href="#">Login</a></li>
										<li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li>
									</ul>
								</div>
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</div><!--- END TOP HEADER -->
				
				<div class="atf-main-header">
					<div class="container">
						<div class="atf-main-header-in">
							<div class="atf-main-header-left">
								<a style="font-size: 40px;" href="index.html">YourStore</a>
																

							</div>

							 <div class="nav-right-part nav-right-part-mobile">
								<ul>
									<li><a class="search header-search" href="#"><i class="fa fa-search"></i></a></li>
									<li class=""><a class="login-btn" href="#">Login</a></li>
									<li><a class="shopping-cart-btn" href="#"><i class="fa fa-shopping-cart"></i><span>2</span></a></li>
								</ul>
							</div>

							<div class="atf-main-header-right">
								<div class="atf-nav">
									<ul class="atf-nav-list atf-onepage-nav">
										<li><a href="index.html" class="atf-smooth-move">Home</a>

										</li>
										<li class="menu-item-has-children"><a href="#" class="atf-smooth-move">See<i class="fa fa-chevron-down ml-2"></i></a>
											<ul>
												<li><a href="contact.html">Services</a></li>
												<!---<li><a href="error.html">404</a></li>--->
												<li><a href="blog.html">Blogs</a></li>
											</ul>
										</li>
										<!--<li><a href="https://www.templatemonster.com/website-templates/al-majid-website-template-152091.html?_gl=1*1ley0u6*_ga*NDMyOTM1NTcxLjE2MTAxOTczNjQ.*_ga_FTPYEGT5LY*MTYxMDI4NzgyNS4zLjAuMTYxMDI4NzgzMS41NA..&_ga=2.145900727.2005536284.1610210101-432935571.1610197364">Pro Version</a></li>
									</ul><!--- END NAV -->
								</div>
							</div><!--- END MAIN HEADER RIGHT -->
						</div>
					</div><!--- END CONTAINER -->
				</div><!--- END MAIN HEADER -->
			</header>
			<!-- End Header Section -->
			

			<div class="atf-content clearfix">
				<div class="atf-page-heading atf-size-md atf-dynamic-bg" data-stellar-background-ratio="0.3" style="background-image: url(assets/img/blog/3.jpg); background-size:cover; background-position: center center;">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-7 col-md-6 col-12">
								<div class="atf-page-heading-in text-center">
									<h1 class="atf-page-heading-title">For Any Help...Contact Us </h1>
									<div class="atf-post-label">
										<span><a href="index1.html">Home</a></span>
										<span>Contact Us</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- .atf-page-heading -->

				<!-- CONTACT SECTION START-->
				<section id="contact" class="atf-contact-area atf-section-padding">
					<div class="container">
						<div class="row clearfix justify-content-center">
							<div class="col-lg-6 col-xl-6">
								<div class="atf-section-title text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
									<h2 class="">Get In Touch</h2>
									<p class="mx-auto my-auto">Get in Touch with our team to solve your Queries and for the latest updates and offers from different brands.</p>
								</div>
							</div>
						</div><!--- END ROW -->
						
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-12 my-auto mx-auto">
								<div class="contact mr-lg-5">
									<h4>Stay Connected with us</h4>
									<form  class="atf-contact-form form" action="" method="POST" >
										<div class="row">
											<div class="form-group col-md-6">
												<input type="text" name="co_name" class="form-control"  placeholder="Your Name" required>
											</div>
											<div class="form-group col-md-6">
												<input type="email" name="co_email" class="form-control"  placeholder="Your Email" required>
											</div>
											<div class="form-group col-md-12">
												<input type="text" name="co_subject" class="form-control" placeholder="Your Subject" required>
											</div>
											<div class="form-group col-md-12">
												<textarea rows="6" name="co_message" class="form-control" placeholder="Your Message" required></textarea>
											</div>
											<div class="col-md-12">
												<div class="actions atf-contact-btn text-left">
													<button type="submit" value="Submit Now" name="submit_now" class="btn atf-themes-btn" title="Submit Your Message!">Send Message</button>
												</div>
											</div>
										</div>
									</form>
									
								</div>
							</div><!--- END COL -->
							

							<div class="col-xl-6 col-lg-6 col-12">
								<div class="atf-contact-info mx-auto my-auto">
									<div class="atf-contact-details">
										<i class="fa fa-home"></i>
										<h4>Address</h4>
										<p>Marwadi University, Rajkot-Morbi Highway, Rajkot Gujarat, India.</p>
									</div>
									<div class="atf-contact-details">
										<i class="fa fa-phone"></i>
										<h4>Mobile Number</h4>
										<p>+91 1234567890</p>
									</div>
									<div class="atf-contact-details">
										<i class="fa fa-envelope"></i>
										<h4>Email Address</h4>
										<p>sample@gmail.com</p>
									</div>
								</div><!--- END CONTACT -->
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END CONTAINER -->
				</section>
				<!-- CONTACT SECTION END-->
				
				<!-- Google Map start-->
				<div id="atf-map-area">
					<iframe style="border:0" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=1%20Marwadi University%20Rajkot Highway,%20Gujarat,%20India+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" allowfullscreen></iframe>
				</div>
				<!-- Google Map end -->
				
			</div>
			<!--- END CONTENT -->
			
			
			 <!-- START COMPANY BRAND LOGO  -->
			<div id="atf-brand-area" class="atf-brand-area atf-section-padding">
				<div class="atf-brand-overlay">
					<div class="container">
						<div class="atf-slider atf-style2">
							<div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"  data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="3" data-lg-slides="5" data-add-slides="3">
								<div class="slick-wrapper">
									<!--<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/1.png" alt="image"></a>
										</div>
									</div> .slick-slide-in 
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/2.png" alt="image"></a>
										</div>
									</div> .slick-slide-in 
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/3.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in 
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/4.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in 
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/5.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in 
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/1.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in 
									
									<div class="slick-slide-in">
										<div class="atf-brand-active">
											<a href="#"><img src="assets/img/partner/2.png" alt="image"></a>
										</div>
									</div><!-- .slick-slide-in -->-->
									
								</div><!-- .slick-slide-Wrapper -->
							</div><!-- .slick-container -->
							
							<div class="pagination atf-style1 atf-flex atf-hidden"></div> <!-- If dont need Pagination then add class .atf-hidden -->
							<div class="swipe-arrow atf-style1"> <!-- If dont need navigation then add class .atf-hidden -->
								<div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
								<div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
							</div>
						</div><!-- .atf-slider -->
					</div><!-- .container -->	
				</div><!-- END OVERLAY -->
			</div>
			<!-- END COMPANY BRAND LOGO -->

			
		   <!-- START NEWSLETTER -->
			<section  class="atf-newsletter atf-section-padding">
				<div class="container">
					<div class="row clearfix justify-content-center">
						<div class="col-xl-6 col-lg-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
							<div class="atf-mailchamp-headding">
								<h2>Subcribe Today for latest Offers</h2>
							</div>
						</div><!-- END COL -->
						
						<div class="col-xl-6 col-lg-6 col-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">	
							<div class="atf-mailchamp-subscribe">
								<form class="form-group" id="mc-form">
									<input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="required">
									<button type="submit" id="subscribe-button" class="btn"><i class="fas fa-envelope"></i></button>
										<!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
										<br>
										<label class="atf-subscription-label" for="email"></label>
								</form>
							</div>
						</div><!-- END COL -->
					</div><!-- END ROW -->
				</div><!-- END CONTAINER -->
			</section>
			<!-- END NEWSLETTER -->
			
			
			
			<!-- FOOTER SECTION START-->
			<footer class="atf-footer-area atf-pattern-area">
				<div class="container">
					<div class="atf-footer-top mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								<div class="atf-footer-box">
									<!--<h5><a href=""><img class="atf-footer-logo" src="assets/img/logo.png" alt="" /></a></h5>-->
									<h5 style="font-size: 20px;" href="index.html">YourStore</h5>

									<ul class="pr-lg-5">
										<li>Marwadi University, Morbi Highway, Rajkot Gujarat, India.</li>
										<li>(+91) 9727622124 <br> (+91) 9574424242</li>
										<li>sample@gmail.com</li>									
									</ul>
								</div>
							</div><!--- END COL -->
							
							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
								<h5>Quick Links</h5>
								<ul class="atf-list-menu">
									<!--<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Get Stared</a></li>-->
									<li> <a href="Our_team.html"><i class="fas fa-angle-right mr-2"></i>Our Team</a></li>
									<li> <a href="about_us.html"><i class="fas fa-angle-right mr-2"></i>About Us</a></li>
									<!--<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Need Helps</a></li>-->
									<!--<li> <a href="contact.html"><i class="fas fa-angle-right mr-2"></i>Contact Us</a></li>-->
								</ul>
							</div><!--- END COL -->
							
							<div class="col-lg-2 col-md-6 col-12 atf-footer-link wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
								<h5>Support Links</h5>
								<ul class="atf-list-menu">
									<!--<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Our Terms</a></li>-->
									<li><a href="Our_services.html"><i class="fas fa-angle-right mr-2"></i>Our Service</a></li>
									<!--<li><a href="#"><i class="fas fa-angle-right mr-2"></i>Privacy Policy</a></li>-->
									<li><a href="privacy_policy.html"><i class="fas fa-angle-right mr-2"></i>Privacy Policy</a></li>
									
								</ul>
							</div><!--- END COL -->
							
							<div class="col-lg-4 col-md-6 col-12 atf-footer-link text-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" data-wow-offset="0">
								<h5>Contact Us</h5>
								<div class="atf-footer-con">
									<ul class="atf-list-menu">
										<!--<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Get Stared</a></li>-->
										<!--<li> <a href="#"><i class="fas fa-angle-right mr-2"></i>Need Helps</a></li>-->
										<li> <a href="contact.html"><i class="fas fa-angle-right mr-2"></i>Contact Us</a></li>
									</ul>
								</div>
								<!--<h4 class="text-white mt-2">Follow Us</h4>
								<div class="atf-footer-social-icon mt-3 text-left">
									<a href="#" class="icon"> <i class="fab fa-facebook"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-dribbble"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-behance"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-linkedin"></i> </a>
									<a href="#" class="icon"> <i class="fab fa-twitter"></i> </a>
								</div>-->
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div><!--- END SINGLE FOOTER -->
				</div><!--- END CONTAINER -->
					
				<div class="atf-footer-boottom mt-4">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-xl-5 col-12 my-auto text-lg-left wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
								</div><!--- END COL -->
							
							 <div class="col-lg-7 col-xl-7 col-12">
								<div class="atf-payment-area text-lg-right my-auto mx-auto">
									<!--<ul>
										<li><a href="#"><img src="assets/img/payment/1.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/2.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/3.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/1.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/2.png" alt="img"></a></li>
										<li><a href="#"><img src="assets/img/payment/3.png" alt="img"></a></li>
									</ul>-->
								</div>
							</div><!--- END COL -->
						</div><!--- END ROW -->
					</div>
				</div>
				<!-- FOOTER SECTION END-->	
			</footer><!--- END FOOTER -->
		</div>
		<!-- PAGE WRAPPER END-->
		
		<!-- Latest jQuery -->
		<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
		<script src="assets/bootstrap/js/bootstrap.js"></script>
		<!-- modernizer JS -->		
		<script src="assets/js/modernizr.custom.js"></script>	
		<!-- magnific-popup js -->	
		<script src="assets/js/jquery.magnific-popup.js"></script>			
		<!-- stellar js -->
		<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- slick js -->
		<script src="assets/js/slick.js"></script>
		<!-- countdown js -->
		<script src="assets/js/jquery.countdown.js"></script>
		<!-- wow js -->
		<script src="assets/js/wow.min.js"></script>
		<!-- ajaxchimp js -->
		<script src="assets/js/ajaxchimp.min.js"></script>
		<!-- form-contact js -->
		<script src="assets/js/form-contact.js"></script>
		<!-- main js -->
		<script src="assets/js/main.js"></script>	
		
	</body>
</html>