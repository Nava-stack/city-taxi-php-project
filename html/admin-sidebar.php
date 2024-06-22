<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar" id="sidebar">
    <ul>
        <li <?php echo ($currentPage == 'admin-dashboard.php') ? 'class="active"' : ''; ?>>
            <a href="admin-dashboard.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li <?php echo ($currentPage == 'admin-manage-passenger.php') ? 'class="active"' : ''; ?>>
            <a href="admin-manage-passenger.php"><i class="fas fa-user"></i> Passenger</a>
        </li>
        <li <?php echo ($currentPage == 'admin-manage-driver.php') ? 'class="active"' : ''; ?>>
            <a href="admin-manage-driver.php"><i class="fas fa-user"></i> Drivers</a>
        </li>
        <li <?php echo ($currentPage == 'admin-manage-vehicle.php') ? 'class="active"' : ''; ?>>
            <a href="admin-manage-vehicle.php"><i class="fas fa-car"></i> Vehicles</a>
        </li>
        <li <?php echo ($currentPage == 'admin-manage-reserve.php') ? 'class="active"' : ''; ?>>
            <a href="admin-manage-reserve.php"><i class="fas fa-calendar"></i> Reservations</a>
        </li>
        <li <?php echo ($currentPage == 'admin-view-rate.php') ? 'class="active"' : ''; ?>>
            <a href="admin-view-rate.php"><i class="fas fa-star"></i> Ratings</a>
        </li>
        <li <?php echo ($currentPage == 'admin-report.php') ? 'class="active"' : ''; ?>>
            <a href="admin-report.php"><i class="fas fa-chart-bar"></i> Reports</a>
        </li>
        <li <?php echo ($currentPage == 'admin-teleoperator.php') ? 'class="active"' : ''; ?>>
            <a href="admin-teleoperator.php"><i class="fas fa-phone"></i> Telephone Operations</a>
        </li>
        <li <?php echo ($currentPage == 'admin-settings.php') ? 'class="active"' : ''; ?>>
            <a href="admin-settings.php"><i class="fas fa-cogs"></i> Settings</a>
        </li>
    </ul>
</aside>
