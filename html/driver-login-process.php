<?php
session_start(); // Start the session
require 'database-config.php';

	if(isset($_POST["signin"]))
	{
    $una = $_POST["username"];
    $pass= $_POST["password"];
    //$email = $_POST["email"];

	$sql = "select * from drivers WHERE username = '$una'";
	$query = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($query);         //fetching the row
	$stored_hashed_password = $row["password"];        
 
	$known_hash = $stored_hashed_password;     //stored password
	$plaintext_password = $pass;             //plain text password

	if(mysqli_num_rows($query)>0)
    {
        $row = mysqli_fetch_assoc($query);

       if (password_verify($plaintext_password, $known_hash)) {
			echo 
			"
			<script>
			alert('Login Successful');
			document.location.href = 'driver-dashboard.php'; 
			</script>
			"
			;
        }
        else
        {
			echo 
			"
			<script>
			alert('Wrong Password');
			document.location.href = 'driver-login.php';
			</script>
			"
			;
            exit;
        }
    }

    else
    {
        echo 
			"
			<script>
			alert('User not Registered');
			document.location.href = 'driver-register.php';
			</script>
			"
			;
        exit;
    }
	}
?>