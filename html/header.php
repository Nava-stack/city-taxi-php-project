<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
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
                <img src="assets/img/logo.png" class="img-fluid" alt="Logo" width="400"/>
              </a>
              <a href="index.php" class="navbar-brand logo-small" >
                <img
                  src="assets/img/logo-2.png"
                  class="img-fluid"
                  alt="Logo"
                  width="60"
                />
              </a>
            </div>
            <div class="main-menu-wrapper">
              <div class="menu-header">
                <a href="index.php" class="menu-logo">
                  <img src="assets/img/logo.png" class="img-fluid" alt="Logo" />
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
                <li <?php echo ($currentPage == 'index.php') ? 'class="active"' : ''; ?>><a href="index.php">Home</a></li>
                <li <?php echo ($currentPage == 'listing-list.php') ? 'class="active"' : ''; ?>><a href="listing-list.php">Vehicles</a></li>
                <li <?php echo ($currentPage == 'our-team.php') ? 'class="active"' : ''; ?>><a href="our-team.php">Our Team</a></li>
                <li <?php echo ($currentPage == 'about-us.php') ? 'class="active"' : ''; ?>><a href="about-us.php">About Us</a></li>
                <li <?php echo ($currentPage == 'contact-us.php') ? 'class="active"' : ''; ?>><a href="contact-us.php">Contact Us</a></li>
                <li class="login-link">
                    <a href="register-as.php" <?php echo ($currentPage == 'register-as.php') ? 'class="active"' : ''; ?>>Sign Up</a>
                </li>
                <li class="login-link">
                    <a href="login-as.php" <?php echo ($currentPage == 'login-as.php') ? 'class="active"' : ''; ?>>Sign In</a>
                </li>
            </ul>
            </div>
            <ul class="nav header-navbar-rht">
              <li class="nav-item">
                <a class="nav-link header-login" href="login-as.php"
                  ><span><i class="fa-regular fa-user"></i></span>Sign In</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link header-reg" href="register-as.php"
                  ><span><i class="fa-solid fa-lock"></i></span>Sign Up</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </header>