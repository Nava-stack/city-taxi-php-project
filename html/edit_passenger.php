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
    <title>Edit Passenger Details</title>
    <!-- Add your CSS includes here -->
</head>
<body>
    <h2>Edit Passenger Details</h2>
    <form action="edit_passenger.php" method="post">
        <input type="hidden" name="pass_id" value="<?php echo $pass_id; ?>">
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
        </div>
        <div>
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
        </div>
        <div>
            <label>Email:</label>
            <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div>
            <label>Phone Number:</label>
            <input class="form-control" type="text" name="phone_number" value="<?php echo $phone_number; ?>">
        </div>
        <div>
            <input type="submit" name="update" value="Update">
        </div>
    </form>
    <!-- Add your JavaScript includes here -->
</body>
</html>
