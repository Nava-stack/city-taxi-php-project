<?php
session_start(); // Start the session
require 'database-config.php';

// Check if driver_id is provided through URL
if(isset($_GET['driver_id'])) {
    $driver_id = $_GET['driver_id'];

    // Fetch the details of the Driver with the given driver_id
    $sql = "SELECT * FROM drivers WHERE driver_id = '$driver_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        // Fetch Driver details
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $username1 = $row['username'];
        $email = $row['email'];
        $nic = $row['NIC'];
        $phone_number = $row['phone_number'];
    } else {
        // No matching Driver found
        // Redirect or display an error message
    }
} else {
    // driver_id parameter is not provided in the URL
    // Redirect or display an error message
}
?>

<?php
require 'database-config.php';

if(isset($_POST['update'])) {
    // Get form data
    $driver_id = $_POST['driver_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nic = $_POST['NIC'];
    $phone_number = $_POST['phone_number'];

    // Update the Driver details in the database
    $sql = "UPDATE drivers SET name='$name', username='$username', email='$email', NIC='$nic', phone_number='$phone_number' WHERE driver_id='$driver_id'";

    if(mysqli_query($conn, $sql)) {
        $_SESSION['update_success'] = "Driver details updated successfully.";
        // header("Location: edit_Driver.php?driver_id=$driver_id"); // Redirect back to edit page
        header("Location: admin-manage-driver.php"); // Redirect back to edit page
        
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    // Form submission is not set
    // Redirect or display an error message
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>City Taxi - Cab Service</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <?php include 'css.php'; ?>
</head>

<body>
    <div class="main-wrapper">

        <?php include 'admin-header.php'; ?>
        <?php include 'admin-sidebar.php'; ?>
        
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Driver</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="edit-driver.php" method="post">
                           
                                <div class="row">
                                        <input type="hidden" name="driver_id" class="form-control" type="text" id="name" value="<?php echo $driver_id; ?>" />
                                    

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input class="form-control" name="name" type="text" id="name" value="<?php echo $name; ?>" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="username">Username <span class="text-danger">*</span></label>
                                        <input class="form-control" name="username" type="text" id="username" value="<?php echo $username1; ?>" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input class="form-control" name="email" type="email" id="email"  value="<?php echo $email; ?>" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">NIC <span class="text-danger">*</span></label>
                                        <input class="form-control" name="NIC" type="text" value="<?php echo $nic; ?>" />
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone </label>
                                        <input class="form-control" name="phone_number" type="text" id="phone" value="<?php echo $phone_number; ?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="display-block">Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked />
                                    <label class="form-check-label" for="product_active">Active</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2" />
                                    <label class="form-check-label" for="product_inactive">Inactive</label>
                                </div>
                            </div>

                            <div class="m-t-20 m-r-200 text-center">
                                <button class="btn btn-secondary submit-btn">Cancel</button>
                                
                                <input class="btn btn-primary submit-btn" type="submit" name="update" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'script.php';?>
    </body>
</html>
