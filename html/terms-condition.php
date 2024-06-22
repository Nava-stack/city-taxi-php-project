<?php include 'top.php' ?>	
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
                <img src="assets/img/logo.svg" class="img-fluid" alt="Logo" />
              </a>
              <a href="index.html" class="navbar-brand logo-small">
                <img
                  src="assets/img/logo-small.png"
                  class="img-fluid"
                  alt="Logo"
                />
              </a>
            </div>
            <div class="main-menu-wrapper">
              <div class="menu-header">
                <a href="index.html" class="menu-logo">
                  <img src="assets/img/logo.svg" class="img-fluid" alt="Logo" />
                </a>
                <a
                  id="menu_close"
                  class="menu-close"
                  href="javascript:void(0);"
                >
                  <i class="fas fa-times"></i
                ></a>
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
                        <li>
                          <a href="forgot-password.html">Forgot Password</a>
                        </li>
                        <li>
                          <a href="reset-password.html">Reset Password</a>
                        </li>
                      </ul>
                    </li>
                    <li class="has-submenu">
                      <a href="javascript:void(0);">Booking</a>
                      <ul class="submenu">
                        <li>
                          <a href="booking-payment.html">Booking Checkout</a>
                        </li>
                        <li><a href="booking.html">Booking</a></li>
                        <li>
                          <a href="invoice-details.html">Invoice Details</a>
                        </li>
                      </ul>
                    </li>
                    <li class="has-submenu">
                      <a href="javascript:void(0);">Error Page</a>
                      <ul class="submenu">
                        <li><a href="error-404.html">404 Error</a></li>
                        <li><a href="error-500.html">500 Error</a></li>
                      </ul>
                    </li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li class="active"><a href="gallery.html">Gallery</a></li>
                    <li><a href="our-team.html">Our Team</a></li>
                    <li><a href="testimonial.html">Testimonials</a></li>
                    <li>
                      <a href="terms-condition.html">Terms & Conditions</a>
                    </li>
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
                <a class="nav-link header-login" href="login.html"
                  ><span><i class="fa-regular fa-user"></i></span>Sign In</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link header-reg" href="register.html"
                  ><span><i class="fa-solid fa-lock"></i></span>Sign Up</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </header>
      <!-- /Header -->

      <!-- Breadscrumb Section -->
      <div class="breadcrumb-bar">
        <div class="container">
          <div class="row align-items-center text-center">
            <div class="col-md-12 col-12">
              <h2 class="breadcrumb-title">Gallery</h2>
              <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item">
                    <a href="javascript:void(0);">Pages</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Gallery
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- /Breadscrumb Section -->

      <!-- Gallery section-->
      <div class="section gallery-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-01.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-01.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-02.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-02.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-03.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-03.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-04.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-04.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-05.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-05.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-06.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-06.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-07.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-07.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-08.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-08.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-09.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-09.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-10.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-10.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-11.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-11.jpg"
                  />
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-down">
              <div class="gallery-widget">
                <a
                  href="assets/img/gallery/gallery-12.jpg"
                  data-fancybox="gallery2"
                >
                  <img
                    class="img-fluid"
                    alt="Image"
                    src="assets/img/gallery/gallery-thum-12.jpg"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Gallery section-->

      <?php include 'footer.php' ?>

    </div>

    <?php include 'scrollTop.php' ?>

    <?php include 'script.php' ?>
  </body>
</html>
