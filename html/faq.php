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
						<a href="index.php" class="navbar-brand logo">
							<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
						</a>
						<a href="index.php" class="navbar-brand logo-small">
							<img src="assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>							
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index.php" class="menu-logo">
								<img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>
						<ul class="main-nav">
							<li><a href="index.php">Home</a></li>
							<li class="has-submenu">
								<a href="#">Listings <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="listing-grid.php">Listing Grid</a></li>
								    <li><a href="listing-list.php">Listing List</a></li>					
								    <li><a href="listing-details.php">Listing Details</a></li>								
								</ul>
							</li>
							<li class="has-submenu active">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="about-us.php">About Us</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Authentication</a>
										<ul class="submenu">
											<li><a href="register.php">Signup</a></li>
											<li><a href="login.php">Signin</a></li>
											<li><a href="forgot-password.php">Forgot Password</a></li>
											<li><a href="reset-password.php">Reset Password</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Booking</a>
										<ul class="submenu">
											<li><a href="booking-payment.php">Booking Checkout</a></li>
											<li><a href="booking.php">Booking</a></li>
											<li><a href="invoice-details.php">Invoice Details</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Error Page</a>
										<ul class="submenu">
											<li><a href="error-404.php">404 Error</a></li>
											<li><a href="error-500.php">500 Error</a></li>
										</ul>
									</li>
									<li><a href="pricing.php">Pricing</a></li>
									<li class="active"><a href="faq.php">FAQ</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="our-team.php">Our Team</a></li>
									<li><a href="testimonial.php">Testimonials</a></li>
									<li><a href="terms-condition.php">Terms & Conditions</a></li>
									<li><a href="privacy-policy.php">Privacy Policy</a></li>									
									<li><a href="maintenance.php">Maintenance</a></li>
									<li><a href="coming-soon.php">Coming Soon</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
								    <li><a href="blog-list.php">Blog List</a></li>
									<li><a href="blog-grid.php">Blog Grid</a></li>
									<li><a href="blog-details.php">Blog Details</a></li>																		
								</ul>
							</li>
							<li><a href="contact-us.php">Contact</a></li>
							<li class="login-link">
								<a href="register.php">Sign Up</a>
							</li>
							<li class="login-link">
								<a href="login.php">Sign In</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<li class="nav-item">
							<a class="nav-link header-login" href="login.php"><span><i class="fa-regular fa-user"></i></span>Sign In</a>
						</li>
						<li class="nav-item">
							<a class="nav-link header-reg" href="register.php"><span><i class="fa-solid fa-lock"></i></span>Sign Up</a>
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
			    	    <h2 class="breadcrumb-title">FAQ</h2>
				    	<nav aria-label="breadcrumb" class="page-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
								<li class="breadcrumb-item active" aria-current="page">FAQ</li>
							</ol>
						</nav>							
					</div>
				</div>
			</div>
		</div>
		<!-- /Breadscrumb -->		     	
		
		<!-- FAQ  -->
		<section class="section faq-section">
			<div class="container">
				<div class="faq-info">
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqOne" aria-expanded="false">What is about rental car deals?</a>
						</h4>
						<div id="faqOne" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>	
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqTwo" aria-expanded="false">In which areas do you operate?</a>
						</h4>
						<div id="faqTwo" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqThree" aria-expanded="false">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium?</a>
						</h4>
						<div id="faqThree" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>	
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqFour" aria-expanded="false">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia?</a>
						</h4>
						<div id="faqFour" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>	
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqFive" aria-expanded="false">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</a>
						</h4>
						<div id="faqFive" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>	
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqSix" aria-expanded="false">eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit?</a>
						</h4>
						<div id="faqSix" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>	
					<div class="faq-card bg-white" data-aos="fade-down">
						<h4 class="faq-title">
							<a class="collapsed" data-bs-toggle="collapse" href="#faqSeven" aria-expanded="false">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod?</a>
						</h4>
						<div id="faqSeven" class="card-collapse collapse">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						</div>
					</div>													
				</div>		
		    </div>	
		</section>	
		<!-- /FAQ -->	

		<?php include 'footer.php'; ?>
		
	</div>

    <!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	<?php include 'script.php'?>

</body>

</html>