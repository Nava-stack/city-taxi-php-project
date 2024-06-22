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
                <a href="index.php" class="navbar-brand logo-small">
                    <img src="assets/img/logo-2.png" class="img-fluid" alt="Logo" width="60"/>
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="index.php" class="menu-logo">
                        <img src="assets/img/logo.png" class="img-fluid" alt="Logo"/>
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                  <li <?php echo ($currentPage == 'admin-dashboard.php') ? 'class="active"' : ''; ?>><a href="admin-dashboard.php">Home</a></li>
                  <li class="has-submenu <?php echo (in_array($currentPage, ['passenger-view-nearby.php', 'passenger-reserve-history.php'])) ? 'active' : ''; ?>">
                    <a href="javascript:void(0)">Manage <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li <?php echo ($currentPage == 'admin-manage-passenger.php') ? 'class="active"' : ''; ?>><a href="admin-manage-passenger.php">Passenger</a></li>
                        <li <?php echo ($currentPage == 'admin-manage-driver.php') ? 'class="active"' : ''; ?>><a href="admin-manage-driver.php">Drivers</a></li>
                        <li <?php echo ($currentPage == 'admin-manage-vehicle.php') ? 'class="active"' : ''; ?>><a href="admin-manage-vehicle.php">Vehicles</a></li>
                        <li <?php echo ($currentPage == 'admin-manage-reserve.php') ? 'class="active"' : ''; ?>><a href="admin-manage-reserve.php">Reservations</a></li>
                        <li <?php echo ($currentPage == 'admin-view-rate.php') ? 'class="active"' : ''; ?>><a href="admin-view-rate.php">Ratings</a></li>
                    </ul>
                  </li> 
                <li <?php echo ($currentPage == 'admin-teleoperator.php') ? 'class="active"' : ''; ?>><a href="admin-teleoperator.php">Tele-Operator</a></li>
                <li <?php echo ($currentPage == 'admin-report.php') ? 'class="active"' : ''; ?>><a href="admin-report.php">Reports</a></li>
                <li <?php echo ($currentPage == 'admin-settings.php') ? 'class="active"' : ''; ?>><a href="admin-settings.php">Settings</a></li>
               
                <li class="login-link">
                    <a href="admin-profile.php" <?php echo ($currentPage == 'admin-profile.php') ? 'class="active"' : ''; ?>>Profile</a>
                </li>
                <li class="login-link">
                    <a href="login-as.php" <?php echo ($currentPage == 'login-as.php') ? 'class="active"' : ''; ?>>Sign Out</a>
                </li>
            </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="admin-profile.php">
                        <span><i class="fa-regular fa-user"></i></span>Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-reg" href="login-as.php">
                        <span><i class="fa-solid fa-lock"></i></span>Sign Out
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

