<?php
session_start(); // Start the session
require 'database-config.php';

// Check if pass_id is provided through URL
if(isset($_GET['pass_id'])) {
    $pass_id = $_GET['pass_id'];

    // Fetch the details of the passenger with the given pass_id
    $sql = "SELECT * FROM passenger WHERE pass_id = '$pass_id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        // Fetch passenger details
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $username = $row['username'];
        $email = $row['email'];
        $phone_number = $row['phone_number'];
    } else {
        // No matching passenger found
        // Redirect or display an error message
    }
} else {
    // pass_id parameter is not provided in the URL
    // Redirect or display an error message
}
?>


<?php
require 'database-config.php';

if(isset($_POST['update'])) {
    // Get form data
    $pass_id = $_POST['pass_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    // Update the passenger details in the database
    $sql = "UPDATE passenger SET name='$name', username='$username', email='$email', phone_number='$phone_number' WHERE pass_id='$pass_id'";

    if(mysqli_query($conn, $sql)) {
        $_SESSION['update_success'] = "Passenger details updated successfully.";
        // header("Location: edit_passenger.php?pass_id=$pass_id"); // Redirect back to edit page
        header("Location: admin-manage-passenger.php"); // Redirect back to edit page
        
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
                        <h4 class="page-title">Edit Passenger</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="edit-passenger.php" method="post">
                            <input type="hidden" name="pass_id" value="<?php echo $pass_id; ?>">
                           
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="username">Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone </label>
                                        <input class="form-control" type="text" name="phone_number" value="<?php echo $phone_number; ?>">
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
