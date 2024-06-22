<?php include 'top.php'; ?>
	
	<div class="main-wrapper">
	
		<!-- Header -->
		<header class="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index.html" class="navbar-brand logo">
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>
						<a href="index.html" class="navbar-brand logo-small">
							<img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>							
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.html" class="menu-logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav">
							<li><a href="index.html">Home</a></li>
							<li class="has-submenu">
								<a href="#">Listings <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="listing-grid.html">Listing Grid</a></li>
								    <li><a href="listing-list.html">Listing List</a></li>					
								    <li><a href="listing-details.html">Listing Details</a></li>								
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="about-us.html">About Us</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Authentication</a>
										<ul class="submenu">
											<li><a href="register.html">Signup</a></li>
											<li><a href="login.html">Signin</a></li>
											<li><a href="forgot-password.html">Forgot Password</a></li>
											<li><a href="reset-password.html">Reset Password</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Booking</a>
										<ul class="submenu">
											<li><a href="booking-payment.html">Booking Checkout</a></li>
											<li><a href="booking.html">Booking</a></li>
											<li><a href="invoice-details.html">Invoice Details</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Error Page</a>
										<ul class="submenu">
											<li><a href="error-404.html">404 Error</a></li>
											<li><a href="error-500.html">500 Error</a></li>
										</ul>
									</li>
									<li class="active"><a href="pricing.html">Pricing</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="our-team.html">Our Team</a></li>
									<li><a href="testimonial.html">Testimonials</a></li>
									<li><a href="terms-condition.html">Terms & Conditions</a></li>
									<li><a href="privacy-policy.html">Privacy Policy</a></li>									
									<li><a href="maintenance.html">Maintenance</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>																		
								</ul>
							</li>
							<li><a href="contact-us.html">Contact</a></li>
							<li class="login-link">
								<a href="register.html">Sign Up</a>
							</li>
							<li class="login-link">
								<a href="login.html">Sign In</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a class="nav-link header-login" href="login.html"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-reg" href="register.html"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->
		
		<!-- Breadscrumb -->
		<div class="breadcrumb-bar">
			<div class="container">
				<div class="row align-items-center text-center">
		    		<div class="col-md-12 col-12">
			    	    <h2 class="breadcrumb-title">Pricing Plan </h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pricing Plan</li>
							</ol>
						</nav>							
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadscrumb -->		     	
		
		<!-- Pricing Plan -->
		<section class="section pricing-section pricing-page">
		   	<div class="container">
			   	<div class="row">
				   	<div class="col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
					   	<div class="price-card">
						   	<div class="price-head">
							   	<div class="price-level">
									<h6>Essential</h6>
								   	<p>For the basics</p>
							   	</div>
							   	<h4>$49</h4>	
							   	<span>Per user per month</span>							
						   	</div>	
						   	<div class="price-details">
							   	<ul>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting message</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car prices include tax</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Extend or return anytime</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Doorstep delivery in 2days</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Car system included free of charge.</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Min 1 month, extend anytime</li>
							   	</ul>
							   	<div>
									<a href="login.html" class="btn viewdetails-btn">Request a demo</a>
							   	</div>							
						   	</div>							
					   	</div>
				  	</div>
				   	<div class="col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">
					   	<div class="price-card price-card-popular">
							<div class="price-head">
								<div class="price-level price-level-popular">
									<h6>Recommended</h6>
									<p>For the Users</p>
								</div>
								<h4>$95</h4>	
								<span>Per user per month</span>							
							</div>		
						   	<div class="price-details">
							   	<ul>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting message</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car prices include tax</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Extend or return anytime</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Doorstep delivery in 2days</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Car system included free of charge.</li>
									<li class="price-uncheck"><span><i class="fa-regular fa-circle-xmark"></i></span>Min 1 month, extend anytime</li>
								</ul>
							   	<div>
								   <a href="login.html" class="btn viewdetails-btn-popular">Request a demo</a>
							   	</div>							
						   	</div>							
					   	</div>
				   	</div>
				   	<div class="col-lg-4 col-md-4 col-12" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="400">
						<div class="price-card">
							<div class="price-head">
								<div class="price-level">
									<h6>Pro</h6>
									<p>For the Pro</p>
								</div>
								<h4>$154</h4>	
								<span>Per user per month</span>							
							</div>	
							<div class="price-details">
								<ul>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Get Starting message</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Rental car prices include tax</li>										
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Extend or return anytime</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Doorstep delivery in 2days</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Car system included free of charge.</li>
									<li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Min 1 month, extend anytime</li>
								</ul>
								<div>
								 <a href="login.html" class="btn viewdetails-btn">Request a demo</a>
								</div>							
							</div>							
						</div>
				   </div>
			   	</div>
		   	</div>
   		</section>
   		<!-- /Pricing Plan -->

        <!-- Footer -->
		<footer class="footer">	
			<!-- Footer Top -->	
			<div class="footer-top aos" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h5 class="footer-title">About Company</h5>
										<ul>
											<li>
												<a href="about.html">Our Company</a>
											</li>
											<li>
												<a href="javascript:void(0)">Shop Toyota</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrentals USA</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrentals Worldwide</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrentals Racing</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Dreamsrentals Racing</a>
											</li>
											<li>
												<a href="javascript:void(0)">Virtual Auto Show</a>
											</li>									
										</ul>
									</div>
									<!-- /Footer Widget -->
								</div>
								<div class="col-lg-4 col-md-6">
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h5 class="footer-title">Vehicles Type</h5>
										<ul>
											<li>
												<a href="javascript:void(0)">All  Vehicles</a>
											</li>
											<li>
												<a href="javascript:void(0)">SUVs</a>
											</li>
											<li>
												<a href="javascript:void(0)">Trucks</a>
											</li>
											<li>
												<a href="javascript:void(0)">Cars</a>
											</li>
											<li>
												<a href="javascript:void(0)">Crossovers</a>
											</li>
											<li>
												<a href="javascript:void(0)">Electrified Vehicles</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Hybrids</a>
											</li>								
										</ul>
									</div>
									<!-- /Footer Widget -->
								</div>
								<div class="col-lg-4 col-md-6">
									<!-- Footer Widget -->
									<div class="footer-widget footer-menu">
										<h5 class="footer-title">Quick links</h5>
										<ul>
											<li>
												<a href="javascript:void(0)">My Account</a>
											</li>
											<li>
												<a href="javascript:void(0)">Champaigns</a>
											</li>
											<li>
												<a href="javascript:void(0)">Dreamsrental Dealers</a>
											</li>
											<li>
												<a href="javascript:void(0)">Deals and Incentive</a>
											</li>
											<li>
												<a href="javascript:void(0)">Financial Services</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Dreamsrental Insurance</a>
											</li>	
											<li>
												<a href="javascript:void(0)">Dreamsrental Care</a>
											</li>								
										</ul>
									</div>
									<!-- /Footer Widget -->
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="footer-contact footer-widget">
								<h5 class="footer-title">Contact Info</h5>
								<div class="footer-contact-info">									
									<div class="footer-address">											
										<span><i class="feather-phone-call"></i></span>
										<div class="addr-info">
											<a href="tel:+1(888)7601940">+ 1 (888) 760 1940</a>
										</div>
									</div>
									<div class="footer-address">
										<span><i class="feather-mail"></i></span>
										<div class="addr-info">
											<a href="https://dreamsrent.dreamstechnologies.com/cdn-cgi/l/email-protection#562523262639242216332e373b263a337835393b"><span class="__cf_email__" data-cfemail="1f6c6a6f6f706d6b5f7a677e726f737a317c7072">[email&#160;protected]</span></a>
										</div>
									</div>
									<div class="update-form">
										<form action="#">
											<span><i class="feather-mail"></i></span> 
											<input type="email" class="form-control" placeholder="Enter You Email Here">
											<button type="submit" class="btn btn-subscribe"><span><i class="feather-send"></i></span></button>
										</form>
									</div>
								</div>								
								<div class="footer-social-widget">
									<h6>Connect with us</h6>
									<ul class="nav-social">
										<li>
											<a href="javascript:void(0)"><i class="fa-brands fa-facebook-f fa-facebook fi-icon"></i></a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-instagram fi-icon"></i></a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-behance fi-icon"></i></a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-twitter fi-icon"></i> </a>
										</li>
										<li>
											<a href="javascript:void(0)"><i class="fab fa-linkedin fi-icon"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<!-- /Footer Top -->

			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row align-items-center">
							<div class="col-md-6">
								<div class="copyright-text">
									<p>© 2023 Dreams Rent. All Rights Reserved.</p>
								</div>
							</div>
							<div class="col-md-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<div class="vistors-details">
										<ul class="d-flex">											
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/paypal.svg" alt="Paypal"></a></li>											
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/visa.svg" alt="Visa"></a></li>
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/master.svg" alt="Master"></a></li>
											<li><a href="javascript:void(0)"><img class="img-fluid" src="assets/img/icons/applegpay.svg" alt="applegpay"></a></li>
										</ul>										   								
									</div>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->			
		</footer>
		<!-- /Footer -->		
		
		
	</div>

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.7.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>	
	
	<!-- Aos -->
	<script src="assets/plugins/aos/aos.js"></script>
	
	<!-- Top JS -->
	<script src="assets/js/backToTop.js"></script>
	
	<!-- Fearther JS -->
	<script src="assets/js/feather.min.js"></script>	
	
	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jan 2024 07:34:49 GMT -->
</html>