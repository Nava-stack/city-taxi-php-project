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
              <li <?php echo ($currentPage == 'driver-dashboard.php') ? 'class="active"' : ''; ?>><a href="driver-dashboard.php">Home</a></li>
                <li <?php echo ($currentPage == 'driver-availability.php') ? 'class="active"' : ''; ?>><a href="driver-availability.php">Availability</a></li>
                <li <?php echo ($currentPage == 'driver-view-rate.php') ? 'class="active"' : ''; ?>><a href="driver-view-rate.php">Ratings</a></li>
                <li <?php echo ($currentPage == 'driver-view-reserve.php') ? 'class="active"' : ''; ?>><a href="driver-view-reserve.php">Reservations</a></li>
                <li class="login-link">
                    <a href="driver-profile.php" <?php echo ($currentPage == 'passenger-profile.php') ? 'class="active"' : ''; ?>>Profile</a>
                </li>
                <li class="login-link">
                    <a href="login-as.php" <?php echo ($currentPage == 'login-as.php') ? 'class="active"' : ''; ?>>Sign Out</a>
                </li>
            </ul>
            </div>
            <ul class="nav header-navbar-rht">
              <li class="nav-item">
                <a class="nav-link header-login" href="driver-profile.php"
                  ><span><i class="fa-regular fa-user"></i></span>Profile</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link header-reg" href="login-as.php"
                  ><span><i class="fa-solid fa-lock"></i></span>Sign Out</a
                >
              </li>
            </ul>
          </nav>
        </div>
</header>