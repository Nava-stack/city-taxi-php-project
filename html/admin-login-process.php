<?php
session_start(); // Start the session
require 'database-config.php';

	if(isset($_POST["signin"]))
	{
    $una = $_POST["username"] ;     //admin
    $pass= $_POST["password"] ;     //password

	$sql = "select * from user WHERE username = '$una'";
	$query = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($query);         //fetching the row
	$stored_hashed_password = $row["password"];        
 
	$known_hash = $stored_hashed_password;     //stored password
	$plaintext_password = $pass;   //plain text password

	if(mysqli_num_rows($query)>0)
    {
        $row = mysqli_fetch_assoc($query);

		if (password_verify($plaintext_password, $known_hash)) {


			echo 
			"
			<script>
			alert('Login successful');
			document.location.href = 'admin-dashboard.php'; 
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
			document.location.href = 'admin-login.php';
			</script>
			"
			;
            exit;
        }
    }
//if the username is not there
    else
    {
        echo 
			"
			<script>
			alert('Need to register for new Admin');      
			document.location.href = 'admin-login.php';
			</script>
			"
			;
        exit;
    }
	}
?>